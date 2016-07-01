<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller{
    public function index(){
        $res = Post::where('active', 1)->get();
        return view('posts.list',['posts' => $res]);
    }

    public function post($id){
        $res = Post::find($id);
        return view('posts.detail', ['post' => $res]);
    }
}
