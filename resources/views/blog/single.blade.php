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


<!--================Blog Area =================-->
<section class="blog_area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('posts/images/'.$post->image)}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 blog_details">

                        <div class="row">
                            <div class="col-md-8">
                                <ul class="list_style blog_header_left">
                                    <li><h2>{{ $post->title }}</h2></li>
                                    <li><p>By&nbsp; : &nbsp; <i class="fas fa-user p-r-5"></i><span>
                                                <i>{{
                                    $post->users->name
                                    }}</i></span></p></li>
                                </ul>

                            </div>
                            <div class="col-md-4">
                                <ul class="list_style blog_header_right">
                                    <li> <b>Posted in:</b> <br> &nbsp;<i class="fas fa-calendar-alt p-r-5"></i>
                                        <small>{{date('M j, Y',strtotime($post->created_at)) }}</small></li>
                                    <li><i class="far fa-comment p-r-5"></i>{{ $post->comments()->count() }} Comments</li>
                                </ul>

                            </div>
                        </div>

                        <p class="excert">
                        {!! $post->content !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tag_post">
                            <i class="fa fa-tags"></i>
                        @foreach($post->tags as $tag)
                                <a href="{{route('tag',$tag->name)}}"> {{ $tag->name }}</a>
                                {{--{{ $tag->name }}--}}
                            @endforeach
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="sharethis-inline-share-buttons mt-3"></div>
                      {{--<p class="social-links-header">Share:</p>--}}
                        {{--<ul class="social-links">--}}
                            {{--<li><a href="#"><i class="fab fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                          @if(isset($previous))
                                <div class="thumb">
                                    <a href="{{url('blog/'.$previous->slug)}}">
                                        <img class="img-fluid" height="60" width="60" src="{{asset('posts/images/'.$previous->image)  }}" alt="">


                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{url('blog/'.$previous->slug)}}"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="details_">
                                    <p>Prev Post</p>
                                    <a href="{{url('blog/'.$previous->slug)}}"><h4>{{ $previous->title }}</h4></a>
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                          @if(isset($next))
                                <div class="details_">
                                    <p>Next Post</p>
                                    <a href="{{url('blog/'.$next->slug)}}"><h4>{{ $next->title }}</h4></a>
                                </div>
                                <div class="arrow">
                                    <a href="{{url('blog/'.$next->slug)}}"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="{{url('blog/'.$next->slug)}}">

                                        <img class="img-fluid" height="60" width="60" src="{{asset('posts/images/'.$next->image)}}" alt=""></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="comments-area">
                    <h4> <i class="fas fa-1x fa-comments p-r-5"></i>{{ $post->comments()->count() }} Comments</h4>
                    @foreach($post->comments as $comment )
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ "https://www.gravatar.com/avatar/". md5(strtolower(trim($comment->email)))."?s=50&d=wavatar" }}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">{{ $comment->name }}</a></h5>
                                        <p class="date">{{date('M jS, Y - G:iA',strtotime('+3 hour',strtotime
                                        ($comment->created_at)))}}
                                        </p>
                                        <p class="comment">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>
                                {{--<div class="reply-btn">--}}
                                {{--<a href="" class="btn-reply text-uppercase">reply</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                    <div class="form-inline">
                        <div class="form-group col-lg-6 col-md-6 name">
                            {{ Form::label('name', ' Name:') }}
                            {{ Form::text('name',null, ['class' => 'form-control ']) }}

                        </div>
                        <div class="form-group col-lg-6 col-md-6 email">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email',null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        {{ Form::label('comment', 'Comment:', ['class' => 'float-left']) }}
                        {{ Form::textarea('comment',null,['class' => 'form-control mb-10', 'rows' => '5']) }}
                    </div>

                    {{ Form::submit('Post Comment', ['class' => 'btn btn-success btn-block my-3']) }}

                    {{ Form::close() }}

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

@stop

