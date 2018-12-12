@extends('layouts.app')
@section('title', '| Care and Follow-Up')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Man Power</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <section class="ministry">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <a href="{{ route('ministries') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left p-r-5"></i>Ministries</a>
            </div>
        </div>
       <div class="row row_content ">
           <h2>CARE AND FOLLOW-UP MINISTRY</h2>
           <div class="col-md-12 col-lg-12 col-sm-12">

    <p>
        The purpose of <b> Care and Follow-up Ministries</b> is to ensure that all those within the congregation in House of
        Grace Eldoret
        are cared for in the event of a physical, financial, emotional or spiritual crisis in their life that
        would require additional care from the church or passtoral team.
        </p>
               <p>A time of celebration can also be a time
        when the church comes alongside an individual or family with support and prayer.
    </p>

           </div>
       </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('focus') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>focus on family</a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('man') }}" class="btn btn-primary">man power<i class="fas fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>
     </div>

    </section>
@endsection