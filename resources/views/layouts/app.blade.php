<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- You can use open graph tags to customize link previews.
     Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://www.houseofgraceeldoret.or.ke/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="House Of Grace - Eldoret " />
    <meta property="og:description"   content="<strong>House of Grace Church - Eldoret<strong>  was Launched on 16th January 2015. It is located
           in Kapsoya, opposite The Noble Hotel,a few meters from the Nairobi – Eldoret Highway." />
    <meta property="og:image"         content="https://www.houseofgraceeldoret.or.ke/images/logo.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>House of Grace Church - Eldoret @yield('title')</title>
    <meta name="description"
          content=" <strong>House of Grace Church - Eldoret<strong>  was Launched on 16th January 2015. It is located
           in Kapsoya, opposite The Noble Hotel,a few meters from the Nairobi – Eldoret Highway.">
    <meta name="keywords" content="house of grace eldoret, house of grace, church eldoret, house of grace church
    eldoret, eldoret, church , Kenya, house of grace eldoret kenya">
    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}

        {{--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">--}}

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<script src="{{ mix('js/app.js') }}"></script>--}}

    <!-- Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        <!-- =========================== HEADER BEGIN  =========================== -->
                 @include('include.header')
        <!-- =========================== HEADER END =========================== -->
          <div id="app">

        @yield('content')
          </div>

        <!-- =========================== FOOTER BEGIN  =========================== -->
        @include('include.footer')
        <!-- =========================== FOOTER END =========================== -->


        <!-- Scripts -->
        {{--<!-- bootstrap 4.1.3 cdn -->--}}
        {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
        {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}
        {{--<script src="{{asset('js/flipclock/timer.js')}}"></script>--}}
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Owl Carousel -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>--}}
        {{--<script src="{{asset('js/bigSlide.min.js')}}"></script>--}}
        @yield('scripts')
        {{--<script>--}}
            {{--jQuery(document).ready(function() {--}}
                {{--jQuery('.toggle-nav').click(function(e) {--}}
                    {{--jQuery(this).toggleClass('active');--}}
                    {{--jQuery('.menu ul').toggleClass('active');--}}
                    {{--e.preventDefault();--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
        {{--<script>--}}
            {{--$(document).ready(function() {--}}
                {{--$('.menu-link').bigSlide();--}}
            {{--});--}}
        {{--</script>--}}
</body>
</html>
