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
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{--{{ session()->get('message') }}--}}
            <h1>Message Successfully sent!</h1>
        </div>
    @endif

    <div class="row">

        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.639785944462!2d35.297056!3d0
            .51051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske
            !4v1537967383843" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
<div class="container">


        <div class="row contact">

            <div class="col-md-4 contact-list">
                <ul>
                    <li><h6><b>Social Media </b></h6></li>
                    <li>FaceBook <br><a href="https://www.facebook.com/houseofgraceeldoret"><img src="{{asset
                    ('images/fb.jpg')}}" height="40" width="50" alt="">House of Grace,Eldoret</a>
                    </li>
                    <li>Twitter <br> <a href="#"><img src="{{asset
                    ('images/twitter.png')}}" height="30" width="30" alt=""></a>
                    </li>
                    <li>Instagram <br>  <a href="#"><img src="{{asset
                    ('images/insta.png')}}" height="30" width="30" alt=""></a>
                    </li>
                     <li class="mt-4"><h6><b>Donation/Tithe & Offering</b></h6></li>
                    <li><img src="{{asset('/images/mpesa.png')}}" alt="" height="100" width="100">
                        <br><b>PayBill Number: 843193</b></li>
                    <li><b>Account Number: Purpose E.g Tithe</b></li>
                    <li>Email Us to: <b>contact@houseofgraceeldoret.or.ke</b></li>
                    <li><b>P.O.Box 1675-30100, Eldoret</b></li>
                    <li><b>Tel: +254-701-945-418</b></li>

                </ul>
            </div>
            <div class="col-md-8">
                <h2>Get In Touch</h2>
                <form  action="{{route('contactform') }}" method="POST">
                      {{csrf_field()}}

                    <div class="row">
                            <div class="col-md-6">
                                <label >First Name</label>
                                <input type="text" name="firstname" placeholder="Your firstname.." required>
                            </div>
                            <div class="col-md-6">
                                <label >Last Name</label>
                                <input type="text"  name="lastname" placeholder="Your lastname.." required>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label >Email</label>
                            <input type="text"  name="email" placeholder="Your email.." required>
                        </div>
                        <div class="col-md-6">
                            <label >Phone Number</label>
                            <input type="text"  name="phone" placeholder="Your phone number.." required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label >Subject</label>
                            <input type="text"  name="subject" placeholder="Subject Matter.." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Write something.."
                                      style="height:200px" required></textarea>

                        </div>
                    </div>
                    <button type="submit"  class="btn-success" >Send Message</button>
                    {{--<input type="submit" value="submit" class="btn">--}}
                </form>
                {{--<form class="form">--}}
                    {{--<h2>CONTACT US</h2>--}}
                    {{--<p type="Name:"><input placeholder="Write your name here.."></input></p>--}}
                    {{--<p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>--}}
                    {{--<p type="Message:"><input placeholder="What would you like to tell us.."></input></p>--}}
                    {{--<button>Send Message</button>--}}
                    {{--<div class="bottom-contact">--}}
                        {{--<span class="fa fa-phone"></span>001 1023 567--}}
                        {{--<span class="fa fa-envelope-o"></span> contact@company.com--}}
                    {{--</div>--}}
                {{--</form>--}}
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