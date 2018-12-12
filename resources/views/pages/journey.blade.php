@extends('layouts.app')
@section('title', '| The Journey')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Programmes</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('programmes') }}">&nbsp;&srarr;&nbsp;Programmes</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;The Journey</li>
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
            <h2>THE JOURNEY</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>The Journey</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('serve') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>serve the lord</a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('leave') }}" class="btn btn-primary">leave and cleave<i class="fas
                fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>
    </div>
    </section>
@endsection