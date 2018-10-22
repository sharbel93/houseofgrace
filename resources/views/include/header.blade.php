
<div class="row navbar-custom ">
        <div class="col-md-12">

            <nav class="navbar navbar-expand-lg  navbar-light  bg-transparent nav-custom " >
                <a class="navbar-brand " href="{{ url('/')  }} " alt="House of Grace - Eldoret">
                    <img src="{{ asset('images/logo.png') }}" width="150" height="150"  alt="">
                </a>
                <button class="navbar-toggler"  type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" ></span>
                </button>
                <div class="collapse navbar-collapse navbar-custom-collapse ml-2 ml-lg-3" id="navbarTogglerDemo01">

                    <ul class="navbar-nav  ">
                        <li class="nav-item active ">
                            <a class="nav-link  " href="{{ url('/')  }}">Home <span class="sr-only">(current)
                                </span></a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" href="{{ route('about') }}">About  us</a>
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
                        <li class="nav-item  ">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('senior-pastor') }}">Senior Pastor</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@section('scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
                jQuery(this).toggleClass('active');
                jQuery('.menu ul').toggleClass('active');

                e.preventDefault();
            });
        });
    </script>
@endsection