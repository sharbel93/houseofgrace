@extends('layouts.app')
@section('title', '| Grace Groups')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 link">
                <p>Grace Groups</p>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbstop">
                    <ul id="breadcrumbs-two">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li><a href="{{ route('ministries') }}">Ministries</a></li>
                        <li><a href="" class="current"><small>Grace Groups</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <p>Grace Groups's page</p>
@endsection