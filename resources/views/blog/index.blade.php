@extends('layouts.app')
@section('title', '| Blog')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Blog</h2>
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Blog</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                @foreach($slides as $slide)
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="categories_post">
                            <img src="{{ asset('posts/images/'.$slide->image) }}" alt="post" >
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="{{route('blog.single', $slide->slug)}}"><h5>
                                            {{ substr(strip_tags($slide->title), 0, 20) }} {{ strlen(strip_tags
                                            ($slide->title)) > 20 ? '...' : "" }}</h5></a>
                                    <div class="border_line"></div>
                                    {{--<p>Have faith in the Lord</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('partials.main._posts')
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                 @include('partials.main._blogaside')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection