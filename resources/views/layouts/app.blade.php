
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>Sinta</title>
 <link href="https://fonts.googleapis.com/css?family=Lekton&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
