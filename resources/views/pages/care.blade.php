@extends('layouts.app')
@section('title', '| Care and Follow-Up')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>CARE AND FOLLOW-UP</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
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
        </div>


    <!--=================================    BREADCRUMBS END     ===============================-->
     <div class="container">
       <div class="row ministry">
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
     </div>
@endsection