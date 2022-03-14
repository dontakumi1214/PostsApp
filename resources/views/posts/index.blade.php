@extends('layouts.app')
@section('content')
@include('commons.session_messages')

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
                <div class="mb-5">
                </div>
                <h3 class="h5 title">
                    {{$post->title}}
                </h3>
                <div class="mb-5">
                    {{$post->body}}
                </div>
                <div class="post_edit text-right">
                    <a class="btn btn-primary btn-sm" href="{{route('posts.edit', ['id' => $post->id])}}"><i class="far fa-edit"></i>編集
                    </a>
                    <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type='submit' class="btn btn-danger btn-sm"><i class="far fa-edit"></i>削除</button>
                    </form>
                </div>
                <section>
                    <div class="m-4">
                        <form class="w-100" action="/" method="post">
                            {{ csrf_field() }}
                            <input name="utf8" type="hidden" value="" />
                            <input value="" type="hidden" name="user_id" />
                            <input value="" type="hidden" name="post_id" />
                            <input name="" value="" class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
                            </input>
                            <div class="text-right">
                                <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm">
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

