@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-4 mx-auto">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto mt-5">ログイン</h2>
            </div>
            {{ Form::open(['route'=>'login.post']) }}
            @csrf
                <div class="form-group col-mb-5">
                    {{ Form::email('email', old('email'), ['class' => 'form-control','placeholder' => 'メールアドレス'])}}
                </div>
                <div class="form-group col-mb-5">
                    {{ Form::password('password', ['class' => 'form-control','placeholder' => 'パスワード'])}}
                </div>
                <div class="actions text-center">
                    {{ Form::submit('ログインする', ['class' => 'btn btn-danger mt-2'] )}}
                </div>
            {{ Form::close() }}
            <br>
                <p class="devise-link text-center">
                アカウントをお持ちでない方へ⇨
                    <a href="/signup">
                    新規登録する
                    </a>
                </p>
            </div>
        </div>
@endsection
