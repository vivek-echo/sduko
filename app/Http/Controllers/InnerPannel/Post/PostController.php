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
       ->where('PT.deletedFlag',0)->selectRaw('PT.pId,PT.userId,PT.postHeading,PT.createdOn,PT.status,PT.postDesc,PT.modelAge,PT.state,PT.city,PT.phoneNo,PT.whatsApp,PT.serviceType,PT.status');
       if($userId->userType != 1)
       {
        $queryData =$queryData->where('PT.userId',$userId->id);
       }
       $queryData =$queryData->get();
       $respnse=[];
       foreach($queryData as $key=>$data){
        $respData['sl']= $key+1;
        $respData['pId']= $data->pId;
        $respData['serviceType']= $data->serviceType;
        $respData['postHeading']= $data->postHeading;
        $respData['createdOn']= $data->createdOn;
        $respData['status']= $data->status;
        $respData['postDesc']= $data->postDesc;
        $respData['modelAge']= $data->modelAge;
        $respData['state']= $data->state;
        $respData['city']= $data->city;
        $respData['phoneNo']= $data->phoneNo;
        $respData['whatsApp']= $data->whatsApp;
        $respData['userType']= $userId->userType;
        $respData['userId']= $userId->id;
        $respData['userIdPost']= $data->userId;
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
                $res['serviceType'] = $getData['serviceType'];
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
                $msg = "Add has been posted.";
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
      
        session()->flash('msg', $msg);
        session()->flash('status', $status);
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

    public function deleteAdd(){
        $getData = request()->all();
        $update = DB::table('posttable as PT')->where('PT.deletedFlag',0)->where('pID',$getData['id'])->update(['deletedFlag'=>1]);
        if($update){
            $status = true;
            $msg = "Post Deleted .";
        }else{
            $status = false;
            $msg = "Something went wrong. Please try again later.";
        }

        return response()->json([
            'status' =>$status,
            'message'=>$msg
        ]);
    }

    public function actionPost(){
        $getData = request()->all();
        $update = DB::table('posttable as PT')->where('PT.deletedFlag',0)->where('pID',$getData['postId'])->update(['status'=>$getData['statusType'] ,'remarks'=>$getData['remarks']]);
        $sts = ($getData['statusType'] == 1)? "Approved" : "Rejected";
        if($update){
            $status = true;
            $msg = 'Post '.$sts.' Successfully. ';
        }else{
            $status = false;
            $msg = "Something went wrong. Please try again later.";
        }

        return response()->json([
            'status' =>$status,
            'message'=>$msg
        ]);
    
    }
}
