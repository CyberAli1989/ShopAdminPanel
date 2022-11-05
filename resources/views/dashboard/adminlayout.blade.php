<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{asset('asset/js/jquery.js')}}"></script>
</head>
<body>
<div id="app">
    @include('dashboard.component.nav')

    <main class="py-4">
        @yield('content')
    </main>

    <div class="preloader">
        <div class="loader"></div>
    </div>
</div>
</body>
</html>
