<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="index.png">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">

        <title>@yield('title', 'Цветы жизни')</title>
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <link rel="stylesheet" type="text/css" href="/css/flex.css">

    </head>
    <body>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
        @section('scripts')
            <script src="/js/imageRotate.js"></script> 
        @show
    </body>
</html>
