<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet prefetch" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    </head>
    <body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    </body>
</html>