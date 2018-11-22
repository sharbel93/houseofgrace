@extends('layouts.app')
@section('title', '| Blog')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->



        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 link">
                        <p>BLOG</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Blog</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('images/cat-post-3.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Faith</h5></a>
                                <div class="border_line"></div>
                                <p>Have faith in the Lord</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('images/cat-post-2.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>Holy Spirit</h5></a>
                                <div class="border_line"></div>
                                <p>Be part of the Holy Spirit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('images/cat-post-1.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>God's Kingdom</h5></a>
                                <div class="border_line"></div>
                                <p>Are You Part of God's Kingdom?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($posts as $post)

                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                               @include('partials.main._blogleft')
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('posts/images/'.$post->image) }}" alt="">
                                    <div class="blog_details">
                                        <a href="blog-single.html"><h2>{{$post->title}}</h2></a>
                                        <p>
                                            {{ substr(strip_tags($post->content), 0, 250) }} {{ strlen(strip_tags
                                            ($post->content)) > 250 ? '...' : "" }}
                                        </p>
                                        <a href="{{route('blog.single', $post->slug)}}" class="view_btn button_hover">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        @endforeach


                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="text-center">--}}
                                        {{--{!! $posts->links() !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        <nav class="blog-pagination justify-content-center d-flex">
                            {!! $posts->links() !!}
                        </nav>
                    </div>
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