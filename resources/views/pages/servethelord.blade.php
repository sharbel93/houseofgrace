@extends('layouts.app')
@section('title', '| Serve The Lord')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 link">
                <p>Serve The Lord</p>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbstop">
                    <ul id="breadcrumbs-two">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li><a href="{{ route('programmes') }}">Ministries</a></li>
                        <li><a href="" class="current"><small>Serve The Lord</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <p>Serve The Lord's page</p>
@endsection