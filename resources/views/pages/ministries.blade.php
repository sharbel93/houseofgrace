@extends('layouts.app')
@section('title', '| Ministries')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Ministries</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Ministries</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->


    <!--=================================    MINISTRIES BEGIN   ===============================-->
    <div class="container">
        <div class="row ministry">
            <h2>OUR MINISTRIES</h2>
            <div class= " col-12 col-md-12 col-lg-12 col-sm-12 ">
    <div class="list-group">
        <a href="{{ route('man') }}" class="list-group-item list-group-item-action ">
           Man Power
        </a>
        <a href="{{ route('women') }}" class="list-group-item list-group-item-action">Women of Worth</a>
        <a href="{{ route('blast') }}" class="list-group-item list-group-item-action">Blast Youth Ministry</a>
        <a href="{{ route('oasis') }}" class="list-group-item list-group-item-action">Oasis of Grace Children Ministry</a>
        <a href="{{ route('throne') }}" class="list-group-item list-group-item-action ">Throne Room Experience</a>
        <a href="{{ route('grace') }}" class="list-group-item list-group-item-action ">Grace Groups</a>
        <a href="{{ route('focus') }}" class="list-group-item list-group-item-action ">Focus On Family</a>
        <a href="{{ route('care') }}" class="list-group-item list-group-item-action ">Care and Follow-up</a>
    </div>

            </div>
        </div>
    </div>
    <!--=================================    MINISTRIES END     ===============================-->

@endsection