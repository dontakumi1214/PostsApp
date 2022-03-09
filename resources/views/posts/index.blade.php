@extends('layouts.app')
@section('content')
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
                <div class="post_edit text-right">
                    <a class="btn btn-primary btn-sm" href=""><i class="far fa-edit"></i>編集
                    </a>
                    <a class="btn btn-danger btn-sm" rel="nofollow" href=""><i class="far fa-trash-alt"></i>削除
                    </a>
                </div>
                <h3 class="h5 title">
                    {{$post->title}}
                </h3>
                <div class="mb-5">
                    {{$post->body}}
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
