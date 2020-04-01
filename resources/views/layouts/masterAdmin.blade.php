<!doctype html>
<html lang="de">
<head>
    <title>@yield('title') Sinta</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('head')
</head>

<body>
    <div class="container">
        @yield('container')
    </div>

    @include('partials.alerts')
    @include('partials.navbarAdmin')

@stack('scripts')

    
</body>
</html>

