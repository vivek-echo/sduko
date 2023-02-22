<?php

namespace App\Http\Controllers\InnerPannel\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;    

class PostController extends Controller
{
    public function index(){
        return view('InnerPannel.Post.ViewPost');
    }

    public function addPost(){
        return view('InnerPannel.Post.AddPost');
    }

    public function uploadData(Request $request){
        $getData = request()->all();
        $name = $request['chooseFiledum'];
        dd($name);
    }

}