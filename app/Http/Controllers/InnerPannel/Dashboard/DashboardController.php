<?php

namespace App\Http\Controllers\InnerPannel\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('InnerPannel.Dashboard.Dashboard');
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