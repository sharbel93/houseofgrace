@extends('layouts.app')
@section('title', '| Serve The Lord')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Serve The Lord</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('programmes') }}">Programmes</a></li>
                                <li><a href="" class="current"><small>Serve The Lord</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container ">
        <div class="row programmes">
            <h2>SERVE THE LORD</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>Serve the Lord</p>
            </div>
        </div>
    </div>
@endsection