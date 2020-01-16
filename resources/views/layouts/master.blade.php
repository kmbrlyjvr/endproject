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
            <div class="loginreg">
                    <ul>
                        <!--<div class="img"><img src="/imgs/moon.png" style="width: 40vh; margin: -90px;"></div>-->
                
                    @if(auth()->check())
                    <li class="user" style="color:var(--main);">
                            Hi, <a class="highlightnude" href="">{{ auth()->user()->name }}</a>
                    </li>

                    <li class="userlogout">
                            <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
                    </li>
                    @endif
                  <!-- 
                        <li> <a href="{{ route('auth.login')}}">login</a></li>
                        <li> <a href="{{ route('auth.signup')}}">sign up</a></li>
                  -->
                    
                    </ul>
                </div>
            <div class="help_button" style="color:var(--main);"><a href="{{ route('help') }}">help</a></div>

        @include('partials.alerts')
        @yield('container')
    </div>

    @include('partials.navbar')

@stack('scripts')
</body>
</html>

