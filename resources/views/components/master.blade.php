<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BIKO - @yield('title')</title>

    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/script/app.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/script/app.js') }}" as="script">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/icon/favicon-16x316.png') }}">
    <link rel="manifest" href="{{ asset('assets/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/safari-pinned-tab.svg') }}" color="#333333">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="theme-color" content="#ffffff">

    @stack('head')
</head>

<body class="loading full_border {{ !empty($page) ? $page : '' }}">
    @include('components.loader')
    @include('components.header')

    @yield('container')

    <script src="{{ asset('assets/script/load.js') }}"></script>
    <script src="{{ asset('assets/script/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    @stack('scripts')
</body>

</html>
