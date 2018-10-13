@extends('layouts.app')
@section('title', '| Blast Youth Ministry')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>BLAST YOUTH MINISTRY</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Blast Youth Ministry</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
  <div class="container">
      <div class="row ministry">
          <h2>BLAST YOUTH MINISTRY</h2>
          <div class="col-md-12 col-lg-12 col-sm-12">

    <p>As <b>Blast Youth Ministry</b>,
        our main purpose is to win souls,
        raise and help the young generation rediscover their God given purpose of life.
    </p>
      <p>  We do this though vibrant youth activities and power packed preachings in
          our Youth Services.</p>
   <p>     We also do school outreaches, community clean ups,
        feeding the orphans in homes and street families among other activities
        to give back to the society
    </p>
          </div>
      </div>
  </div>
@endsection