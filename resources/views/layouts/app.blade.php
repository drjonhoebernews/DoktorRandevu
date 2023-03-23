<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Randevu') }} | Doktor Bilgini Doktor Randevu</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/owl.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.ico">
    @vite(['resources/sass/app.scss'])
    @yield('css')
</head>
<body>
    <div class="boxed_wrapper">
        <div class="preloader"></div>
        @include('partials.header')

        @yield('content')
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-arrow-up"></span>
        </button>
        @include('partials.footer')
    </div>
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/validation.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/scrollbar.js"></script>
    <script src="/assets/js/tilt.jquery.js"></script>
    <script src="/assets/js/jquery.paroller.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    @yield('js')

    <!-- main-js -->
{{--    <script src="assets/js/script.js"></script>--}}
        @vite(['resources/js/app.js'])
</body>
</html>
