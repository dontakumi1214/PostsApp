<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }
}
