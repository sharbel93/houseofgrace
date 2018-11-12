<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>House Of Grace - MANAGEMENT</title>
    @yield('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('partials.admin.layouts._head')
</head>
<body>

        {{--@include('_includes.nav.main')--}}
        {{--@include('pages.admin.nav.nav')--}}
        <div id="app">
            @yield('content')
        </div>

        @include('partials.admin.layouts._footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
@include('partials.admin.layouts._js')
@yield('scripts')


</body>
</html>
