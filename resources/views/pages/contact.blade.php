@extends('layouts.app')
@section('title', '| Contact')
@section('content')

    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <section class="breadcrumb_area br_image">
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-title">Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">&nbsp;&srarr;&nbsp;Contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    <!--=================================    BREADCRUMBS END     ===============================-->

    <div class="row">

        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.639785944462!2d35.297056!3d0
            .51051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske
            !4v1537967383843" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <section class="contact">

        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h5 class="text-center">Message Successfully sent!</h5>
                </div>

            @endif
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>
                        Feel Free To Share Your Thoughts With Us
                    </h1>
                    <h3>
                      <small>
                          Fill in the contact form or contact us directly by email at <span>info@houseofgraceeldoret.or.ke</span>
                      </small>
                    </h3>
                </div>
            </div>
            <div class="row">
                <h2>Get In Touch</h2>
                <div class="col-md-12">
                    <form  action="{{route('contactform') }}" method="post">
                    {{csrf_field()}}
                        <div class="row mb-4">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <input type="text"  name="fullname"   placeholder="Full Name" required="">
                            </div>
                            <div class="col-md-4 mb-md-0 mb-4">
                                <input type="email"  name="email"   placeholder="Email Address" required="">
                            </div>
                            <div class="col-md-4 mb-md-0 mb-4">
                                <input type="tel"  name="phone" placeholder="Phone" required="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
            <textarea  name="message"  placeholder="Write some words of encouragement" cols="30" rows="10" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-block">Send Message</button>
                                {{--<input type="submit" class="btn btn-primary btn-block" value="Send Message">--}}
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>


@endsection
