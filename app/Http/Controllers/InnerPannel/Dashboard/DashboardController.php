<?php

namespace App\Http\Controllers\InnerPannel\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $count = DB::table('posttable')->selectRaw('count(pId) as totalPost,count(if(status = 0,pId,NULL)) as totalPending,count(if(status = 1,pId,NULL)) as totalApproved,count(if(status = 2,pId,NULL)) as totalrejected')->where('deletedFlag',0);
        $user = Auth::user();
        $res['userType']= $user->userType;
        if($res['userType'] != 1){
            $count->where('userId',$user->id );
        }
        $count= $count ->first();
        $res['totalPost']=$count->totalPost;
        $res['totalPending']=$count->totalPending;
        $res['totalApproved']=$count->totalApproved;
        $res['totalrejected']=$count->totalrejected;
        $res['totalUser']=DB::table('users')->where('deletedFlag',0)->where('userType','!=',1)->count();
        return view('InnerPannel.Dashboard.Dashboard',$res);
    }

    public function getProfileData(){
        $user= Auth::user();
        $res['name']=$user->name;
        $res['email']=$user->email;
        $res['userType']=$user->userType == 1 ? "super Admin": "User";
        return response()->json([
            'data' => $res
        ]);
    }
}