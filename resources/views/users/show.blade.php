@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="user-card col-md-12">
            <div class="text-center">
                <i class="fas fa-user-circle fa-3x"></i>
                <h3>
                　ユーザ名
　　　　  </h3>
                <div class="col-12">
                    <p>
                    メールアドレス
                    </p>
                </div>

                <div class="col-12 mt-3">
                    <a class="btn btn-outline-dark common-btn btn-sm edit-profile-btn" href="/users/edit"><i class="fas fa-user-edit"></i>プロフィール編集
                    </a>
                    <a class="btn btn-outline-dark common-btn btn-sm edit-profile-btn" rel="nofollow" data-method="POST" href=""><i class="fas fa-cog"></i>ログアウト
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">{{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection