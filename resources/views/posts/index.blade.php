@extends('layouts.app')
@section('content')
@include('commons.session_messages')
@include('commons.error_messages')
<div class="jumbotron">
    <h1 class="display-4 text-center">
        Laravel Post 
        <i class="fas fa-mail-bulk"></i>
    </h1>
</div>
@foreach($posts as $post)
<div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
        <div class="card mt-3">
            <div class="card-header align-items-center d-flex">
                <a class="no-text-decoration" href="">
                    <i class="fas fa-user-circle fa-2x mr-1"></i>
                </a>
                <a class="black-color" title="" href="">
                    <strong>
                        {{$post->user->name}}
                    </strong>
                </a>
            </div>
            <div class="card-body">
            @if(Auth::id() === $post->user_id)
                <div class="post_edit text-right">
                    <a class="btn btn-primary btn-sm" href="{{route('posts.edit', ['id' => $post->id])}}"><i class="far fa-edit"></i>編集
                    </a>
                    <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="post" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type='submit' class="btn btn-danger btn-sm"><i class="far fa-edit"></i>削除</button>
                    </form>
                </div>
            @endif
                <div class="mb-5">
                </div>
                <h3 class="h5 title">
                    {{$post->title}}
                </h3>
                <div class="mb-5">
                    {{$post->body}}
                </div>
                <section>
                    <div class="m-4">
                        @foreach($post->comments as $comment)
                        <div class="border-top p-1">
                            <div>
                                <strong>
                                    <a class="no-text-decoration text-dark" href="{{route('users.show', ['id' => $comment->user_id])}}">{{$comment->user->name}}</a>
                                </strong>
                            </div>
                            @if(Auth::id() === $comment->user_id)
                            <div class="post_edit text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('comments.edit', ['id' => $comment->id])}}"><i class="far fa-edit"></i>編集
                                </a>
                                <form action="{{route('comments.destroy', ['id' => $comment->id])}}" method="post" style="display:inline;">
                                @method('DELETE')
                                @csrf
                                <button type='submit' class="btn btn-danger btn-sm"><i class="far fa-edit"></i>削除</button>
                                </form>
                            </div>
                            @endif
                            <div>
                                <span>{{$comment->comment}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <form class="w-100" action="{{route('comments.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value={{Auth::id()}} />
                        <input type="hidden" name="post_id" value={{$post->id}} />
                        <input name="comment[{{$post->id}}]" class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
                        </input>
                        <div class="text-right">
                            <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm " value="{{old('comment.'.$post->id)}}">
                            </input>
                        </div>
                    </form>
            </div>
            </section>
        </div>
    </div>
</div>
</div>
@endforeach
@endsection
