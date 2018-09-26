<nav class="navbar navbar-expand-lg bg-transparent">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ url('/')  }}">
            <img src="{{ asset('images/logo.png') }}" width="100" height="100" alt="">
        </a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
            <li class="nav-item active  ml-sm-2">
                <a class="nav-link " href="{{ url('/')  }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{ route('about') }}">About  us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ministries') }}">Ministries</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('departments') }}">Departments</a>
            </li>
            <li class="nav-item  ">
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