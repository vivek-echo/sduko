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
       ->where('PT.deletedFlag',0)->selectRaw('PT.pId,PT.postHeading,PT.createdOn,PT.status,PT.postDesc,PT.modelAge,PT.state,PT.city,PT.phoneNo,PT.whatsApp');
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
        $respData['status']= $data->status;
        $respData['postDesc']= $data->postDesc;
        $respData['modelAge']= $data->modelAge;
        $respData['state']= $data->state;
        $respData['city']= $data->city;
        $respData['phoneNo']= $data->phoneNo;
        $respData['whatsApp']= $data->whatsApp;
        $respData['image']= DB::table('postimage')->where('postId',$respData['pId'])->where('deletedFlag',0)->first()->image;
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
                $res['whatsApp'] = $getData['WhatsApp'];
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
    public function viewPostData(){
        $getData = request()->all();
       $queryData = DB::table('posttable as PT')
       ->where('PT.deletedFlag',0)->selectRaw('PT.pId,PT.postHeading,PT.createdOn,PT.status,PT.postDesc,PT.modelAge,PT.state,PT.city,PT.phoneNo,PT.whatsApp,PT.serviceType')->where('pId',$getData['id'])->first();
       $images = DB::table('postimage')->where('postId',$getData['id'])->where('deletedFlag',0)->get();
       return response()->json([
        'data' => $queryData,
        'images'=>$images
    ]);
    }
}
