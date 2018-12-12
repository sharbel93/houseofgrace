@extends('layouts.app')
@section('title', '| About Us')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">About Us</h2>
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">&srarr;&nbsp;About</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->


    <!--=================================    ABOUT BEGIN     ===============================-->
  <section class="about_section">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <ul>
                      <li>  <img src="{{asset('images/pbd1.jpg')}}"  ></li>
                      <li>  <img src="{{asset('images/pbd2.jpg')}}"  ></li>
                      <li>  <img src="{{asset('images/pbd3.jpg')}}"  ></li>
                  </ul>
              </div>
              <div class="col-md-8">
                  <div class="church_profile">
                      <div class="row">
                          <div class="col-md-12">
                              <h2>Church Profile</h2>
                              <p>
                                  <span>House of Grace Church Eldoret</span> was Launched on 16th January 2015 by the
                                  Senior Pastors
                                  Dickson
                                  and Betty Waime. It started with a membership of 116 in attendance. Since then the church
                                  has grown in leaps and bounds to a congregation of over 300 members in the last three years of
                                  God’s faithfulness.
                              </p><br>
                              <p>
                                  We are engaged in outreaches through various ministries.
                                  We hold free medical camps, visit the sick in hospitals and Medical Centers,
                                  and Facilitate free counselling for members and those not members in whatever
                                  issue they are going through. </p>
                              <br>
                              <p>
                                  We also have neighborhood outreaches (Anagkazo),
                                  missions to Schools and Colleges and feeding programs to the less fortunate in the society.

                              </p>

                          </div>
                      </div>
                  </div>
                  <div class="church_statements">
                      <h2>Church Statements</h2>
                      <h6>VISION</h6>
                      <p>To transform the lives of its members and subsequently
                          the society at large to be like Christ by teaching and training them to be
                          witnesses of our Lord Jesus Christ, <br>
                          <i>1 Cor 15:10, “but by the grace of God I am who I am .”</i>
                      </p>
                      <h6>MISSION</h6>
                      <p>
                          To equip and prepare our members to be witnesses
                          for our Lord Jesus Christ by their experiences of His grace.
                      </p>
                      <h6>MINISTRY SLOGAN</h6>
                      <p>
                          Doing church as a team.
                      </p>
                      <h6>MINISTRY MOTTO</h6>
                      <p>
                          Reaching the Lost Through our witness.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 col-sm-12 col-md-4 col-lg-4 about-carousel">--}}
                {{--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="carousel-item active">--}}
                            {{--<img class="d-block w-100" src="{{asset('images/about.jpg')}}" alt="first pic">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img class="d-block w-100" src="{{asset('images/about3.jpg')}}" alt="Second pic">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img class="d-block w-100" src="{{asset('images/about2.jpg')}}" alt="Second pic">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-12 col-sm-12 col-md-8 col-lg-8 about">--}}
                {{--<div class="tabs">--}}
                    {{--<div class="tab-2">--}}
                        {{--<label for="tab2-1"> Church Profile</label>--}}
                        {{--<input id="tab2-1" name="tabs-two" type="radio" checked="checked">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                {{--<span>House of Grace Church Eldoret</span> was Launched on 16th January 2015 by the--}}
                                {{--Senior Pastors--}}
                                {{--Dickson--}}
                                {{--and Betty Waime. It started with a membership of 116 in attendance. Since then the church--}}
                                {{--has grown in leaps and bounds to a congregation of over 300 members in the last three years of--}}
                                {{--God’s faithfulness.--}}
                            {{--</p>--}}
                            {{--<p>--}}

                                {{--We are engaged in outreaches through various ministries.--}}
                                {{--We hold free medical camps, visit the sick in hospitals and Medical Centers,--}}
                                {{--and Facilitate free counselling for members and those not members in whatever--}}
                                {{--issue they are going through. </p>--}}
                            {{--<p>--}}
                                {{--We also have neighborhood outreaches (Anagkazo),--}}
                                {{--missions to Schools and Colleges and feeding programs to the less fortunate in the society.--}}

                            {{--</p>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="tab-2">--}}
                        {{--<label for="tab2-2">Church Statements</label>--}}
                        {{--<input id="tab2-2" name="tabs-two" type="radio">--}}
                        {{--<div class="about-title">--}}
                            {{--<h6>VISION</h6>--}}
                            {{--<p>To transform the lives of its members and subsequently--}}
                                {{--the society at large to be like Christ by teaching and training them to be--}}
                                {{--witnesses of our Lord Jesus Christ, <br>--}}
                                {{--<i>1 Cor 15:10, “but by the grace of God I am who I am--}}
                                    {{--.”</i>--}}
                            {{--</p>--}}
                            {{--<h6>MISSION</h6>--}}
                            {{--<p>--}}
                                {{--To equip and prepare our members to be witnesses--}}
                                {{--for our Lord Jesus Christ by their experiences of His grace.--}}
                            {{--</p>--}}
                            {{--<h6>MINISTRY SLOGAN</h6>--}}
                            {{--<p>--}}
                                {{--Doing church as a team.--}}
                            {{--</p>--}}
                            {{--<h6>MINISTRY MOTTO</h6>--}}
                            {{--<p>--}}
                                {{--Reaching the Lost Through our witness.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--=================================    ABOUT END     ===============================-->

@endsection