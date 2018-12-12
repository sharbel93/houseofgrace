@extends('layouts.app')
@section('title', '| Leave and Cleave')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Programmes</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('programmes') }}">&nbsp;&srarr;&nbsp;Programmes</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Leave and Cleave</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <section class="programmes">

        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('programmes') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>Programmes</a>
                </div>
            </div>
            <div class="row row_content">
                <h2>Leave and Cleave</h2>
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <p>Leave and Cleave</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                    <a href="{{ route('journey') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>the journey</a>
                </div>
                <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                    <a href="{{ route('serve') }}" class="btn btn-primary">serve the lord<i class="fas
                fa-arrow-alt-circle-right
                    p-l-5"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection