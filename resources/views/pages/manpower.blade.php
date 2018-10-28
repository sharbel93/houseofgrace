@extends('layouts.app')
@section('title', '| Man Power')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Man Power</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{ route('ministries') }}">Ministries</a></li>
                                <li><a href="" class="current"><small>Man Power</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
    <div class="container">
        <div class="row ministry">
            <h2>MAN POWER MINISTRY</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">

                <p>Man power is a men ministry in House Of Grace Church-Eldoret.
                    The main purpose is to point men to God the true Light that gives light to every man <em>John 1:16</em>,
                    that they may be a light to their generation and the generations to come thus bringing salvation to
                    the ends of the earth <em>Isaiah 49:6</em></p>

                   <h5><b>Spiritual Growth</b></h5>
                  <p> Man to pursue God and grow into His Fullness <br> <em>Eph 3:19 Amp/ ROM 8:11</em></p>

                   <h5><b>Economic impact</b> </h5>
                <p> Men to realize their competitive advantage in all they do is God <br><em>John 1:3/ 2 Thes
                        1:11</em></p>

                  <h5><b>Generational impact</b></h5>
                <p>After this life men and women may praise God because they were born and they had courage to listen
                    and follow God's prompting <br><em>Rev 7:9-10</em></p>
                </p>
            </div>
        </div>
    </div>
@endsection