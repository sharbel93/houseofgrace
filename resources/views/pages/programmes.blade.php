@extends('layouts.app')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Programmes</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Programmes</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container">
        <div class="row programmes">
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
@endsection