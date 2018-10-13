@extends('layouts.app')
@section('title', '| Oasis of Grace Children Ministry')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Oasis of Grace Children Ministry</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Oasis of Grace Children Ministry</small></a></li>
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
        <h2>OASIS OF GRACE CHILDREN MINISTRY</h2>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
    <p>
        <b>Oasis of Grace Children Ministry</b> is a dynamic Sunday school that
        exists with a vision of raising a generation that brings change for God.
    </p>
      <p>  Our mission is to train, nurture and equip children with God's word so
        that they can impact the world around them (homes,schools, estates),
        with the warmth of God's love . <br>
      <i>(Deut 6:7)</i>

    </p>

        </div>
    </div>

</div>
@endsection