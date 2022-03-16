<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\User;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->with('comments')->get();
        $post = Post::find(3)->comments;
        dd($post);
        return view('posts.index',[
            'posts' => $posts,
            
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = \Auth::id();
        $post->save();
        
        return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        if (\Auth::id() !== $post->user_id) {
            return redirect('/');
        }
        
            return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        if (\Auth::id() !== $post->user_id) {
            return redirect(route('posts.edit', ['id' => \Auth::id]));
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = \Auth::id();
        $post->save();
        return redirect('/');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        if (\Auth::id() !== $post->user_id){
            return redirect('/')->with('error','許可されていない操作です。');
        }
        $post->delete();
        return redirect('/')->with('success','削除に成功しました。');
    }
}

