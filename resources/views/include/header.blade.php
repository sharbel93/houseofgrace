{{--<div id="top" class="">--}}

{{--</div>--}}
<header class="header_area wrap push">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-4 col-xs-4 ">
                    <ul class="nav social_icon">
                        <li><a href="https://www.facebook.com/houseofgraceeldoret"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/HOGEldoret/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/houseofgraceeldoret/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-8 col-8
                col-xs-8 ">
                    <div class="top_btn d-flex justify-content-end">
                        <a href="{{ route('senior-pastor') }}">Senior Pastor</a>
                        <a href="{{ route('blog') }}">Blog</a>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-light"  >
        <div class="container padding">
            <a class=" logo_h" href="{{ url('/')  }} " >
                <img src="{{ asset('images/logo.png') }}" alt="House of Grace - Eldoret">
            </a>
            {{--<a href="#menu" class="menu-link">&#9776;</a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             {{--Collect the nav links, forms and other content for toggling--}}
            <div class="collapse navbar-collapse offset " id="navbarTogglerDemo01">

                <ul class="nav navbar-nav ml-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link" href="{{ url('/')  }}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('ministries') }}">Ministries</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('departments') }}">Departments</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('programmes') }}">Programmes</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('lordskitchen') }}">Lord's Kitchen</a>
                    </li>
                </ul>
        </div>
        </div>
    </nav>

    {{--Mobile & tab responsive menu navigation--}}
    {{--<div id="top" class="wrap push">--}}
        {{--<a href="#menu" class="menu-link">&#9776;</a>--}}
    {{--</div>--}}
    {{--<nav id="menu" class="panel" role="navigation">--}}
        {{--<ul>--}}
            {{--<li><a href="home"></a></li>--}}
            {{--<li><a href="about us"></a></li>--}}
            {{--<li><a href="ministries"></a></li>--}}
            {{--<li><a href="departments"></a></li>--}}
            {{--<li><a href="programmes"></a></li>--}}
            {{--<li><a href="lord's kitchen"></a></li>--}}
            {{--<li><a href="blog"></a></li>--}}
            {{--<li><a href="contact us "></a></li>--}}
            {{--<li><a href="senior pastor"></a></li>--}}
        {{--</ul>--}}
    {{--</nav>--}}

</header>

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$('.menu-link').bigSlide({--}}
                {{--'side': 'left',--}}
                {{--'speed': '550',--}}
                {{--'menuWidth': '150px',--}}

            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--jQuery(document).ready(function() {--}}
            {{--jQuery('.toggle-nav').click(function(e) {--}}
                {{--jQuery(this).toggleClass('active');--}}
                {{--jQuery('.menu ul').toggleClass('active');--}}

                {{--e.preventDefault();--}}
            {{--});--}}
        {{--});--}}

        {{--//* Navbar Fixed--}}
        {{--function navbarFixed(){--}}
            {{--if ( $('.header_area').length ){--}}
                {{--$(window).scroll(function() {--}}
                    {{--var scroll = $(window).scrollTop();--}}
                    {{--if (scroll >= 30 ) {--}}
                        {{--$(".header_area").addClass("navbar_fixed");--}}
                    {{--} else {--}}
                        {{--$(".header_area").removeClass("navbar_fixed");--}}
                    {{--}--}}
                {{--});--}}
            {{--};--}}
        {{--};--}}
        {{--navbarFixed();--}}
    {{--</script>--}}
{{--@endsection--}}