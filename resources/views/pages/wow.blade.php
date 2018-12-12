@extends('layouts.app')
@section('title', '| Women Of Worth')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Women Of Worth</li>
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

            <h2>WOMEN OF WORTH Ministry</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>The <b>Woman of Worth</b>  is a Ministry to women from all walks of life.
                    The purpose is to build a woman in a wholistic way not just spiritually. </p>
                <p>  Women of Worth, started in 2016 and so far we have reached out to women
                    through organizing breakfasts, business networking, conferences and hospital
                    outreach.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('man') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left p-r-5"></i>man power </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('blast') }}" class="btn btn-primary">blast youth<i class="fas fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection