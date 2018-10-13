@extends('layouts.app')
@section('content')
    <!--=================================    BREADCRUMBS BEGIN     ===============================-->
    <div class="container">
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
    </div>
    <!--=================================    BREADCRUMBS END     ===============================-->


        <div class="row">
            <div class="col-md-4 contact-list">
                <ul>
                    <li><h6><b>Social Media Pages</b></h6></li>
                    <li>FaceBook  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>Instagram  <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>Twitter  <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                     <li><h6><b>Donation/Tithe/Offering</b></h6></li>
                    <li>**mpesa paybill number***</li>
                </ul>
            </div>
            <div class="col-md-8">
                <form class="form">
                    <h2>CONTACT US</h2>
                    <p type="Name:"><input placeholder="Write your name here.."></input></p>
                    <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
                    <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
                    <button>Send Message</button>
                    <div class="bottom-contact">
                        <span class="fa fa-phone"></span>001 1023 567
                        <span class="fa fa-envelope-o"></span> contact@company.com
                    </div>
                </form>
            </div>
        </div>

@endsection