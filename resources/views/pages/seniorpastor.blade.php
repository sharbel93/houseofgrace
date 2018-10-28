@extends('layouts.app')
@section('title', '| Senior Pastor')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->


        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>Senior Pastor</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Senior Pastor</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
   <div class="container">
       <!--================Team Area=================-->
       <section class="team_area section_gap">
           <div class="container">
               <div class="section_title text-center">
                   <h2>Our Senior Pastors</h2>
                </div>
               <div class="row mb_30">

                   <div class="col-md-6  col-sm-6">
                       <div class="team_item">
                           <div class="team_img">
                               <img  src="{{asset('images/about3.jpg')}}" alt="team">
                               <ul class="list_style">
                                   <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                               </ul>
                           </div>
                           <div class="content">
                               <h3>Pst. Dickson Waime</h3>
                               <p>Senior Pastor</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6  col-sm-6">
                       <div class="team_item">
                           <div class="team_img">
                               <img src="{{asset('images/about2.jpg')}}" alt="team">
                               <ul class="list_style">
                                   <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                               </ul>
                           </div>
                           <div class="content">
                               <h3>Pst. Betty Waime</h3>
                               <p>Senior Pastor</p>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </section>
       <!--================Team Area=================-->
   </div>
@endsection