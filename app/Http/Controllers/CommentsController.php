<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

use App\Comment;

class CommentsController extends Controller
{
    public function store(CommentRequest $request){
        $user_id = (int)$request->user_id;
        $post_id = (int)$request->post_id;
        if(\Auth::id() !== $user_id){
            return redirect('/')->with('error','許可されていない操作です。');
        }
        $comment = new Comment;
        $comment->comment = $request->comment[$post_id];
        $comment->post_id = $post_id;
        $comment->user_id = $user_id;
        $comment->save();
        return redirect('/')->with('success', 'コメントの投稿に成功しました。');
    }
}
