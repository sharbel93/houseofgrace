@extends('layouts.app')
@section('title', '| The Journey')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 link">
                <p>The Journey</p>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbstop">
                    <ul id="breadcrumbs-two">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li><a href="{{ route('programmes') }}">Ministries</a></li>
                        <li><a href="" class="current"><small>The Journey</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <p>The Journey's page</p>
@endsection