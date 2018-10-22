@extends('layouts.app')
@section('title', '| Women Of Worth')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Women of Worth</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Women Of Worth</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container ">
        <div class="row ministry">
            <h2>WOMEN OF WORTH</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>The <b>Woman of Worth</b>  is a Ministry to women from all walks of life.
                    The purpose is to build a woman in a wholistic way not just spiritually. </p>
                <p>  This ministry started two years ago and so far we have reached out to women
                    through organizing breakfasts, business networking, conferences and hospital
                    outreach.</p>
            </div>
        </div>
    </div>
@endsection