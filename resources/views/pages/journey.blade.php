@extends('layouts.app')
@section('title', '| The Journey')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>The Journey</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('programmes') }}">Programmes</a></li>
                                <li><a href="" class="current"><small>The Journey</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container ">
        <div class="row programmes">
            <h2>THE JOURNEY</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p>The Journey</p>
            </div>
        </div>
    </div>
@endsection