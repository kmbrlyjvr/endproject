<!doctype html>
<html lang="de">
<head>
    <title>@yield('title') Sinta</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <script src="js/gsap.js"></script>
</body>
</html>

