@extends('layouts.app')
@section('title', '| Throne Room Experience')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Throne Room Experience</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
<section class="ministry">

    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('ministries') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left p-r-5"></i>Ministries</a>
            </div>
        </div>
        <div class="row row_content">
            <h2>THRONE ROOM EXPERIENCE</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>
                    <b>Throne room experience</b> is a worship experience that
                    happens every second Friday of the month, led by our Praise and Worship team
                    . Graced with different themes, this is a life changing platform that
                    allows you to freely worship in truth and in spirit.</p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('oasis') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>children </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('grace') }}" class="btn btn-primary">grace groups<i class="fas
                fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection