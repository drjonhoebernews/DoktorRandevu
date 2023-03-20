<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="boxed_wrapper">
{{--        <div class="preloader"></div>--}}
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>
    @vite(['resources/js/app.js'])
</body>
</html>
