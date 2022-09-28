<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/header.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalizer.css'); }} " media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/table.css'); }} " media="screen" />
        <script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
    @section('content_header')
        <h1>Principal</h1>
    @stop
        @inertia
    </body>
</html>
