@extends('layouts.app')
@section('title', '| Focus On Family')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Focus on family</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <section class=" ministry">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('ministries') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left p-r-5"></i>Ministries</a>
            </div>
        </div>
        <div class="row row_content">
            <h2>FOCUS ON FAMILY</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>We recognize family as instituted by God in the Garden of Eden. <br>
                    <i>
                        ‘Therefore shall a man leave his father and his mother,
                        and shall cleave unto his wife: and they shall be one flesh.’ <br> Gen 2:24.
                    </i>
                </p>
                  <p>  This ministry is geared towards equipping and building strong
                    families. This is achieved through premarital counseling classes
                    dubbed Leave & Cleave, couple’s seminars, retreats and parenting classes.
                </p>
            </div>
        </div>
        <div class="row " >
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('grace') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>grace groups </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('care') }}" class="btn btn-primary">care & follow up<i class="fas
                fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>

    </div>

    </section>
@endsection