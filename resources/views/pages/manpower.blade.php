@extends('layouts.app')
@section('title', '| Man Power')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Man Power</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->

<section class="ministry">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('ministries') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left p-r-5"></i>Ministries</a>
            </div>
        </div>
        <div class="row row_content">
            <h2>MAN POWER MINISTRY</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">

                <p>Man power is a men ministry in House Of Grace Church-Eldoret.
                    The main purpose is to point men to God the true Light that gives light to every man <em>John 1:16</em>,
                    that they may be a light to their generation and the generations to come thus bringing salvation to
                    the ends of the earth <em>Isaiah 49:6</em></p>

                <h5><b>Spiritual Growth</b></h5>
                <p> Man to pursue God and grow into His Fullness <br> <em>Eph 3:19 Amp/ ROM 8:11</em></p>

                <h5><b>Economic impact</b> </h5>
                <p> Men to realize their competitive advantage in all they do is God <br><em>John 1:3/ 2 Thes
                        1:11</em></p>

                <h5><b>Generational impact</b></h5>
                <p>After this life men and women may praise God because they were born and they had courage to listen
                    and follow God's prompting <br><em>Rev 7:9-10</em></p>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('care') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>care & follow up </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('women') }}" class="btn btn-primary">women of worth<i class="fas fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection