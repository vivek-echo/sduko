<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\RegisterUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registerUser()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $res['name'] = $getData['name'];
            $res['email'] = $getData['email'];
            $res['userType'] = 1;
            $res['created_at'] = now();
            $tran =  DB::transaction(function () use ($res, $getData): void {

                $insertId = DB::table('users')->insertGetId($res);
                $mailData['userId'] = Crypt::encryptString($insertId);
                $mailData['getData'] =   $getData;
                $mail = Mail::to($getData['email'])->send(new RegisterUser($mailData));
            });

            if (is_null($tran)) {
                $status = true;
                $msg = "Activation link sent to your Email .";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'RegisterController',
                'Method' => 'registerUser',
                'Error' => $t->getMessage(),
            ]);
            $status = false;
            $msg = "Something went wrong. please try again later";
        }
        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }

    public function changePassword()
    {
        $getData = request()->all();
        $userId = Crypt::decryptString($getData['userId']);
        $checkUser = DB::table('users')->where('deletedFlag', 0)->where('id', $userId)->first();
        if ($checkUser) {
            if ($checkUser->activeStatus == 0) {
                $view['id'] = $getData['userId'];
                return view('auth.passwords.ChangePassword', $view);
            } else {
                session()->flash('msg', 'Unauthorized Access');
                return redirect('/login');
            }
        } else {
            session()->flash('msg', 'User doesnot Exist');
            return redirect('/register');
        }
    }

    public function updatePassword()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $userId = Crypt::decryptString($getData['userId']);
            $updateData  = DB::transaction(function () use ($userId, $getData): void {
                DB::table('users')->where('id', $userId)->update([
                    'password' => Hash::make($getData['password']),
                    'temp' => $getData['password'],
                    'activeStatus' => 1
                ]);
            });
            if (is_null($updateData)) {
                $status = true;
                $msg = 'Registration Process Completed';
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'RegisterController',
                'Method' => 'registerUser',
                'Error' => $t->getMessage(),
            ]);
            $status = false;
            $msg = "Something went wrong. please try again later";
        }
        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }
}
