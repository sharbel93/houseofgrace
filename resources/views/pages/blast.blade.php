@extends('layouts.app')
@section('title', '| Blast Youth Ministry')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li>&nbsp<a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&srarr;&nbsp;Blast Youth</li>
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
          <h2>BLAST YOUTH MINISTRY</h2>
          <div class="col-md-12 col-lg-12 col-sm-12">

    <p>As <b>Blast Youth Ministry</b>,
        our main purpose is to win souls,
        raise and help the young generation rediscover their God given purpose in life.
    </p>
      <p>  We do this though vibrant youth activities and power packed preachings in
          our Youth Services.</p>
   <p>     We also do school outreaches, community clean ups,
        feeding the orphans in homes and street families among other activities
        to give back to the society
    </p>
          </div>
      </div>
             <div class="row">
                 <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                     <a href="{{ route('women') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                     p-r-5"></i>women of worth </a>
                 </div>
                 <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                     <a href="{{ route('oasis') }}" class="btn btn-primary">children<i class="fas
                     fa-arrow-alt-circle-right
                    p-l-5"></i></a>
                 </div>
             </div>
         </div>
     </section>

@endsection