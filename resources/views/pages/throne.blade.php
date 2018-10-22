@extends('layouts.app')
@section('title', '| Throne Room Experience')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Throne Room Experience</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Throne Room Experience</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container ">
        <div class="row ministry">
            <h2>THRONE ROOM EXPERIENCE</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>
                    <b>Throne room experience</b> is a worship experience that
                    happens every second Friday of the month, led by our Praise and Worship team
                    . Graced with different themes, this is a life changing platform that
                    allows you to freely worship in truth and in spirit.</p>

            </div>
        </div>
    </div>
@endsection