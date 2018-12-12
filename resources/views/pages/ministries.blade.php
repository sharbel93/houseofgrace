@extends('layouts.app')
@section('title', '| Ministries')
@section('content')

    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Ministries</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <!--=================================    MINISTRIES BEGIN   ===============================-->
   <section class="ministry">

    <div class="container">
        <div class="row ">
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
   </section>
    <!--=================================    MINISTRIES END     ===============================-->

@endsection