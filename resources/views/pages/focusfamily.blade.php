@extends('layouts.app')
@section('title', '| Focus On Family')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Focus on Family</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Focus On Family</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container">
        <div class="row ministry">
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


    </div>
@endsection