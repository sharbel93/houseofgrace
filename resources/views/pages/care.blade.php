@extends('layouts.app')
@section('title', '| Care and Follow-Up')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 link">
                <p>Care and Follow-Up</p>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbstop">
                    <ul id="breadcrumbs-two">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li><a href="{{ route('ministries') }}">Ministries</a></li>
                        <li><a href="" class="current"><small>Care and Follow-Up</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <p>Care and Follow-Up's page</p>
@endsection