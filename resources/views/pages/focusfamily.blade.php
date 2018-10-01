@extends('layouts.app')
@section('title', '| Focus On Family')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 link">
                <p>Focus On Family</p>
            </div>
            <div class="col-md-6">
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
    <!--=================================    BREADCRUMBS END     ===============================-->

    <p>Focus On Family's page</p>
@endsection