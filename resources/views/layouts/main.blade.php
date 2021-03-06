<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://kit.fontawesome.com/fff0ef5f89.js" crossorigin="anonymous"></script>
    </head>

    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
