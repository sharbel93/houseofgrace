@extends('layouts.app')
@section('title', '| Grace Groups')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

    <div class="container">
        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Grace Groups</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
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


        </div>
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->
       <div class="container">
<div class="row ministry">
    <h2>GRACE GROUPS</h2>
    <div class="col-md-12 col-sm-12 col-lg-12">
    <p>As we grow big in numbers, we grow small in fellowship.
    </p>
        <p>Through <b>grace groups</b>, we reach out to family members,
        neighbors and pray for the community. 
            <p>These home fellowships are
        the channels through which church reaches out to it's members who are bereaved,
        have celebrations like birthdays, graduations,
        weddings and the like. <br> Members meet <b>every Thursday from 5:30 pm to 6:30 pm</b>.</p>
        
    </div>
</div>
       </div>
@endsection