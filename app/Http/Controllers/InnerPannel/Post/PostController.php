<?php

namespace App\Http\Controllers\InnerPannel\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('InnerPannel.Post.ViewPost');
    }

    public function add(){
        return view('InnerPannel.Post.AddPost');
    }

}