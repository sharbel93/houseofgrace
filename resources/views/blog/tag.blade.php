@extends('layouts.app')
@section('title', '| Blog')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">{{ strtoupper($tagged->name) }} </h2>
                <ol class="breadcrumb">
                    {{--<li><a href="{{url('/')}}">Home</a></li>--}}
                    <li class="active"> Blogs with tag <b><i>{{$tagged->name}}</i></b></li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    @include('partials.main._posts')
                </div>
                {{--<div class="col-lg-4">--}}
                    {{--<div class="blog_right_sidebar">--}}
                        {{--@include('partials.main._blogaside')--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@stop