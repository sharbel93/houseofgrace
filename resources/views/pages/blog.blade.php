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
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Faith,</a>
                                        <a href="#">Love,</a>
                                        <a href="#">Holy Spirit,</a>
                                        <a href="#">Abundance</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Admin<i class="fas fa-user"></i></a></li>
                                        <li><a href="#">10 Oct, 2018<i class="fas fa-calendar-alt"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="far fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="far fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{asset('images/m-blog-1.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog-single.html"><h2>Faith</h2></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-single.html" class="view_btn button_hover">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Faith,</a>
                                        <a href="#">Love,</a>
                                        <a href="#">Holy Spirit,</a>
                                        <a href="#">Abundance</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Admin<i class="fas fa-user"></i></a></li>
                                        <li><a href="#">10 Oct, 2018<i class="fas fa-calendar-alt"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="far fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="far fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{asset('images/m-blog-2.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog-single.html"><h2>Holy Spirit</h2></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-single.html" class="view_btn button_hover">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Faith,</a>
                                        <a href="#">Love,</a>
                                        <a href="#">Holy Spirit,</a>
                                        <a href="#">Abundance</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Admin<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">10 Oct, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{asset('images/m-blog-3.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog-single.html"><h2>God's Kingdom</h2></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-single.html" class="view_btn button_hover">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        {{--<aside class="single_sidebar_widget author_widget">--}}
                            {{--<img class="author_img rounded-circle" src="image/blog/author.png" alt="">--}}
                            {{--<h4>Charlie Barber</h4>--}}
                            {{--<p>Senior blog writer</p>--}}
                            {{--<div class="social_icon">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-github"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-behance"></i></a>--}}
                            {{--</div>--}}
                            {{--<p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>--}}
                            {{--<div class="br"></div>--}}
                        {{--</aside>--}}
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="{{asset('images/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="{{asset('images/add.jpg')}}" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Categories</h4>
                            <ul class="list_style cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Faith</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Holy Spirit</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Abundance</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Family</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Giving</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Leadership</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Love</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list_style">
                                <li><a href="#">Faith</a></li>
                                <li><a href="#">Holy Spirit</a></li>
                                <li><a href="#">Abundance</a></li>
                                <li><a href="#">Faith</a></li>
                                <li><a href="#">Abundance</a></li>
                                <li><a href="#">Love</a></li>
                                <li><a href="#">God's kingdom</a></li>
                                <li><a href="#">Family</a></li>
                                <li><a href="#">Leaderhip</a></li>
                                <li><a href="#">Abundance</a></li>
                                <li><a href="#">Love</a></li>
                                <li><a href="#">Faith</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection