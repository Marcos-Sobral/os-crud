<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/header.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/normalizer.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/footer.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css'); }} " media="screen" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
