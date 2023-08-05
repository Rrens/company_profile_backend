<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restopia - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="http://reztopia.my.id:8000/assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">
</head>

<body>
    @include('sweetalert::alert')
    <div id="auth">

        <div id="auth-left">
            <div class="auth-logo">
                <a href=""><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            </div>

            @yield('container')

        </div>
    </div>
</body>

</html>
