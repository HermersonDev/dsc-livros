<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biblioteca - @yield('titulo')</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">Biblioteca</a>
        </nav>

        <div class="container">
            <h3 style="padding-top: 10px">@yield('titulo')</h3>
            <hr />
            
            @yield('corpo')
        </div>

        <script src="/js/jquery-3.3.1.slim.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
