<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>Laravel掲示板</title>
                    <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
                    <!--bootstrap-->
                    <!--CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
                    <!-- Material Design Bootstrap -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
                    <!-- Bootstrap core CSS -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <!-- Styles -->
                    <link href="{{ asset('/css/application.css') }}" rel="stylesheet">
                    <!-- Fontawsome -->
                    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        </head>
        <body>
            @include('commons.header')
            @yield('content')
            @include('commons.footer')
            <!-- JQuery -->
            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="js/tether.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- MDB core  JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
        </body>
    </html>
