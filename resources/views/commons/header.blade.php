@auth

<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="fas fa-home fa-2x"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-center">
            <li>
                <a class="btn btn-info" href="/posts/new"><i class="fas fa-pencil-alt"></i>
                投稿する
                </a>
            </li>
            <li>
                <a class="nav-link far fa-user fa-lg" href="/users/{{ Auth::user()->id }}">
                </a>
            </li>
        </ul>
    </div>
</nav>

@endauth

