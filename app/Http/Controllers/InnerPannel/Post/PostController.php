<?php

namespace App\Http\Controllers\InnerPannel\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $userId =Auth::user();
        
       $queryData = DB::table('posttable as PT')
    //    ->leftjoin('postimage as PI',function($q){
    //     $q->on('PT.pId','=','PI.postId')->where('PT.deletedFlag',0);
    //    })
       ->where('PT.deletedFlag',0)->selectRaw('PT.pId,PT.postHeading,PT.createdOn');
       if($userId->userType != 1)
       {
        $queryData =$queryData->where('PT.userId',$userId->id);
       }
       $queryData =$queryData->get();
       $respnse=[];
       foreach($queryData as $key=>$data){
        $respData['sl']= $key+1;
        $respData['pId']= $data->pId;
        $respData['postHeading']= $data->postHeading;
        $respData['createdOn']= $data->createdOn;
        $respData['image']= DB::table('postimage')->where('postId',$respData['pId'])->first()->image;
        array_push($respnse, $respData);
       }
       $res['pageData'] = $respnse;
        return view('InnerPannel.Post.ViewPost', $res);
    }

    public function addPost()
    {
    
        return view('InnerPannel.Post.AddPost');
    }

    public function uploadData(Request $request)
    {
        $status = 2;
        $msg = "Something went wrong. please try again later";
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $userId =Auth::user()->id;
            $tran =  DB::transaction(function () use ($getData, $userId): void {
                $res['userId'] =  $userId;
                $res['state'] = $getData['stateId'];
                $res['city'] = $getData['cityId'];
                $res['postHeading'] = $getData['postHeading'];
                $res['postDesc'] = $getData['postDescription'];
                $res['modelAge'] = $getData['modelAge'];
                $res['phoneNo'] = $getData['phoneNo'];
                $res['WhatsApp'] = $getData['WhatsApp'];
                $res['createdOn'] = now();
                $insertId = DB::table('posttable')->insertGetId($res);
                $resp = [];
                foreach ($getData['chooseFiledum'] as $key => $val) {
                    $image      = $val;
                    $extension = $image->getClientOriginalExtension();
                    Storage::disk('public')->put('/postImage/'.$insertId.'/'.$key. '.' . $extension,  File::get($image));
                    $db['postId'] = $insertId;
                    $db['image'] = 'postImage/'.$insertId.'/'.$key. '.' . $extension;
                    array_push($resp ,$db);
                }

                DB::table('postimage')->insert($resp);
            });

            if (is_null($tran)) {
                $status = 1;
                $msg = "Post Updated successfully";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'RegisterController',
                'Method' => 'registerUser',
                'Error' => $t->getMessage(),
            ]);
            $status = 2;
            $msg = "Something went wrong. please try again later";
        }
        $res['status']=$status;
        $res['msg']=$msg;
        session()->flash('msg', $msg);
        return redirect('/AddPost');
    }
}
