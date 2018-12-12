@extends('layouts.app')
@section('title', '| Grace Groups')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Grace Groups</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->
    <section class="ministry">

       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <a href="{{ route('ministries') }}" class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left p-r-5"></i>Ministries</a>
               </div>
           </div>
<div class="row row_content">
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
           <div class="row">
               <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                   <a href="{{ route('throne') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                   p-r-5"></i>throne room experience </a>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                   <a href="{{ route('focus') }}" class="btn btn-primary">focus on family<i class="fas
                   fa-arrow-alt-circle-right
                    p-l-5"></i></a>
               </div>
           </div>
       </div>
    </section>
@endsection