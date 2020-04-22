<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') Sinta</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    @stack('head')
</head>

<body>
    <div class="container">
            <div class="loginreg">
                    <ul>
                
                    @if(auth()->check())
                    <li class="user" style="color:var(--main);">
                            Hi, <a class="highlightnude" href="{{ route('profile') }}">{{ auth()->user()->name }}</a>
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
            <div class="help_button" style="color:var(--main);"><a href="/help">help</a></div> 

        @yield('container')
    </div>

    @include('partials.alerts')
    @include('partials.navbar')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

   
@stack('scripts')
</body>
</html>

