@extends('layouts.app')
@section('title', '| Programmes')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Programmes</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Programmes</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
<section class="programmes">
    <div class="container">
        <div class="row ">
            <h2>OUR PROGRAMMES</h2>
            <div class="col-md-12 col-lg-12 col-sm-12 ">
                <div class="list-group">
                    <a href="{{ route('journey') }}" class="list-group-item list-group-item-action ">
                        The Journey
                    </a>
                    <a href="{{ route('leave') }}" class="list-group-item list-group-item-action">Leave and Cleave</a>
                    <a href="{{ route('serve') }}" class="list-group-item list-group-item-action">Serve The Lord</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection