@extends('layouts.app')
@section('title', '| Oasis of Grace Children Ministry')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Ministries</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('ministries') }}">&nbsp;&srarr;&nbsp;Ministries</a></li>
                    <li class="current">&nbsp;&srarr;&nbsp;Oasis of Grace Children</li>
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
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_left">
                <a href="{{ route('blast') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left
                p-r-5"></i>blast youth </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12 btn_right">
                <a href="{{ route('throne') }}" class="btn btn-primary">throne room experience<i class="fas
                fa-arrow-alt-circle-right
                    p-l-5"></i></a>
            </div>
        </div>

</div>
</section>
@endsection