
<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-4">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto">
                新規登録
                </h2>
            </div>
            {{ Form::open(['route'=>'signup.post']) }}
            @csrf
                <div class="form-group">
                    {{ Form::label('name', '名前') }}
                    {{ Form::text('name', old('name')) }}
                </div>
                
                <div class="form-group">
                    {{ Form::label('email', 'メールアドレス') }}
                    {{ Form::email('email', old('email'))}}
                </div>
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'パスワード') }}
                    {{ Form::password('password')}}
                </div>

                <div class="form-group">
                    {{ Form::label('password_confirmation', 'パスワード確認') }}
                    {{ Form::password('password_confirmation')}}
                </div>

                <div class="actions text-center">
                    {{ Form::submit('新規登録') }}
                </div>
            {{ Form::close() }}
            <br>
                <p class="devise-link">
                アカウントを既にお持ちの場合⇨
                    <a href="/login">
                    ログインする
                    </a>
                </p>
            </div>
        </div>
    </div>
