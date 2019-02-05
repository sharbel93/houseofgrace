
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
                <div class="col-sm-8 col-8 col-xs-8 ">
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

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">

                <ul class="nav navbar-nav" style="float: right;">
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
</header>
