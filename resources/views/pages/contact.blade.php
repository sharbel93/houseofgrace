@extends('layouts.app')
@section('title', '| Contact')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->

        <div class="row breadcrumb-wrap " >

            <div class="breadcrumb-text">
                <div class="row">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6  col-lg-6 link">
                        <p>CONTACT US</p>
                    </div>
                    <div class="col-xs-12 col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="breadcrumbstop">
                            <ul id="breadcrumbs-two">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="current"><small>Contact Us</small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    <!--=================================    BREADCRUMBS END     ===============================-->


    <div class="row">

        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.639785944462!2d35.297056!3d0
            .51051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske
            !4v1537967383843" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h5 class="text-center">Message Successfully sent!</h5>
        </div>

    @endif
    <div class="row contact">
        <h2>Get In Touch</h2>
        <div class="col-md-12">
            <form  action="{{route('contactform') }}" method="post">
            {{csrf_field()}}
                <div class="row mb-4">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <input type="text"  name="fullname"   placeholder="Full Name" required="">
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <input type="email"  name="email"  class="form-control" placeholder="Email Address"required="">
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <input type="tel"  name="phone" class="form-control" placeholder="Phone" required="">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
    <textarea  name="message"  class="form-control" placeholder="Write some words of encouragement" cols="30" rows="10" required=""></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success btn-block">Send Message</button>
                        {{--<input type="submit" class="btn btn-primary btn-block" value="Send Message">--}}
                    </div>
                </div>
            </form>
            <div class="row bottom-contact">
                <div class="col-md-6">
                    <p><span>Connect with us</span></p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fab fa-twitter "></span></a></li>
                        <li><a href="https://www.facebook.com/houseofgraceeldoret" class="p-2"><span class="fab fa-facebook "></span></a></li>
                        {{--<li><a href="#" class="p-2"><span class="fab fa-linkedin "></span></a></li>--}}
                        <li><a href="#" class="p-2"><span class="fab fa-instagram "></span></a></li>
                        {{--<li><a href="#" class="p-2"><span class="fab fa-google-plus "></span></a></li>--}}
                    </ul>
                    <div class="below-contact">
                        <p ><span>Send us your Query anytime!</span></p>
                        <ul>
                            <li> <i class="fas fa-at "></i> &nbsp; info@houseofgraceeldoret.or.ke</li>
                            <li><i class="fas fa-address-book "></i> &nbsp; P.O.Box 1675-30100, Eldoret</li>
                            <li><i class="fas fa-phone "></i> &nbsp; +254701945418</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 donations-title">

                    <p><span >Donation | Tithe &amp; Offering</span></p>
                    <div class="row row-sample">
                        <div class="col-4 col-sm-5 col-md-3">
                            <img src="{{asset('/images/mpesa.png')}}" alt="">
                        </div>
                        <div class="col-8 col-sm-7 col-md-9 donations">
                            <ul>
                                <li><b>PayBill Number: </b><br> 843193</li>
                                <li><b>Account Number:</b> <br> Purpose E.g Tithe</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
{{--@section('scripts')--}}
    {{--<script>--}}
                {{--@if(Session::has('message'))--}}
        {{--var type = "{{ Session::get('alert-type', 'info') }}";--}}
        {{--switch(type){--}}
            {{--case 'info':--}}
                {{--toastr.info("{{ Session::get('message') }}");--}}
                {{--break;--}}

            {{--case 'warning':--}}
                {{--toastr.warning("{{ Session::get('message') }}");--}}
                {{--break;--}}

            {{--case 'success':--}}
                {{--toastr.success("{{ Session::get('message') }}");--}}
                {{--break;--}}

            {{--case 'error':--}}
                {{--toastr.error("{{ Session::get('message') }}");--}}
                {{--break;--}}
        {{--}--}}
        {{--@endif--}}
    {{--</script>--}}
{{--@endsection--}}