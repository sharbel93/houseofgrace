@extends('layouts.app')
@section('title', '| Senior Pastor')
@section('content')
  <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Senior Pastor</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Senior Pastor</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
<section class="pastors">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center pastors_pd">
                <img src="{{asset('images/pbd2.jpg')}}">
                    <h2>Senior Pastor Dickson Waime</h2>
                <ul class="social-links">
                    <li><a href="https://web.facebook.com/dickson.waime"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/DicksonWaime"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/dickson_waime_/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{asset('images/pbd3.jpg')}}"  >
                <h2>Senior Pastor Betty Waime</h2>
                <ul class="social-links">
                    <li><a href="https://web.facebook.com/bi.waime"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/bettywaime/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection