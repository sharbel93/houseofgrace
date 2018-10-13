@extends('layouts.app')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>BLOG</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Blog</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->
        <div class="container">
            <p>blogs's page</p>

        </div>
@endsection