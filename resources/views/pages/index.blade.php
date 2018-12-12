@extends('layouts.app')
@section('title', '| Home')
@section('content')
    <!-- =========================== SLIDER BEGIN  =========================== -->
    <section class="home-slider">
        <div class="row ">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <div class="owl-carousel owl-theme">
                    <!-- first slide -->
                    <div class="item">
                        <img src="{{asset('images/intro.jpg')}}">

                    </div>
                    <!-- second slide -->
                    <div class="item ">
                        <img src="{{asset('images/sermons2.jpg')}}">
                        <div class="bottom-left">
                            <div class="slidertextone" data-animation-in="fadeInLeft"
                                 data-animation-out="animate-out fadeOutRight">
                                Powerful
                            </div>
                            <div class="slidertexttwo" data-animation-in="fadeInRight"
                                 data-animation-out="animate-out fadeOutLeft">
                                Sermons
                            </div>
                        </div>
                    </div>
                    <!-- third slide-->
                    <div class="item">
                        <img src="{{asset('images/worship.jpg')}}">
                        <div class="bottom-left">
                            <div class="slidertextone" data-animation-in="fadeInLeft"
                                 data-animation-out="animate-out fadeOutRight">
                                Hearty
                            </div>
                            <div class="slidertexttwo" data-animation-in="fadeInRight"
                                 data-animation-out="animate-out fadeOutLeft">
                                Worship
                            </div>
                        </div>
                    </div>
                    <!-- fourth slide -->
                    <div class="item">
                        <img src="{{asset('images/blast.jpg')}}">
                        <div class="bottom-left">
                            <div class="slidertextone" data-animation-in="fadeInLeft"
                                 data-animation-out="animate-out fadeOutRight">
                                Blast Youth
                            </div>
                            <div class="slidertexttwo" data-animation-in="fadeInRight"
                                 data-animation-out="animate-out fadeOutLeft">
                                Ministry
                            </div>
                        </div>
                    </div>
                    <!-- fifth slide -->
                    <div class="item">
                        <img src="{{asset('images/children2.jpg')}}">
                        <div class="bottom-left">
                            <div class="slidertextone" data-animation-in="fadeInLeft"
                                 data-animation-out="animate-out fadeOutRight">
                                Dynamic Children
                            </div>
                            <div class="slidertexttwo" data-animation-in="fadeInRight"
                                 data-animation-out="animate-out fadeOutLeft">
                                Ministry
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== SLIDER END  =========================== -->


    <!-- =========================== EVENT DATE AREA BEGIN  =========================== -->
    <section class="upcoming-events-highlight">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mb-3 element-animate">
                    <span class="section-heading">Upcoming Events</span>
                    <h2><a href="#">CrossOver Service 2019</a></h2>
                    <div class="events-meta">
                        <span class="mr-2"><span
                                    class="far fa-calendar-alt mr-2"></span>Monday 31st/12/2018 9:00 pm</span>
                        <span class="mr-2"><span class="fas fa-location-arrow mr-2"></span>House Of Grace Church,
                            Eldoret</span>
                        {{--<span class="mr-2"><span class="fas fa-user mr-2"></span>Pastor Luis Matthew</span>--}}
                    </div>
                </div>
                <div class="col-md-6 element-animate">
                    <div id="date-countdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== EVENT DATE AREA END  =========================== -->


    <!-- =========================== SERVICES BEGIN  =========================== -->
    <div class="bannertitle">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <hr class="hr-service">
            </div>
        </div>
    </div>
    <section class="services">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-6 mb-2 col-lg-6">
                    <h4 class="text-center">SUNDAY SERVICES</h4>
                    <ul>
                        <li><span>Prayer Service </span> &nbsp; <br>
                            <small>7:00am - 8:00am</small>
                        </li>
                        <br>
                        <li><span>The Journey  </span><br>&nbsp;
                            <small> 8:00am - 8:50am</small>
                        </li>
                        <br>
                        <li><span>Family Service  </span>&nbsp;<br>
                            <small>9:00am - 12:00pm</small>
                        </li>
                        <br>
                        <li><span>Oasis of Grace Childrens Church </span><br>
                            <small>10:00am - 12:00am</small>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h4 class="text-center">OTHER SERVICES</h4>
                    <ul>
                        <li><span>Blast Youth Service  </span>&nbsp;<br>
                            <small> Every
                                fortnight
                                3:30pm -
                                6:00pm
                            </small>
                        </li>
                        <br>
                        <li><span>Prayer BootCamp </span>&nbsp;<br>
                            <small> Wednesdays 5:30pm -
                                7:30pm
                            </small>
                        </li>
                        <br>
                        <li><span>Ladies Prayer Meeting  </span><br>&nbsp;<small>Tuesdays 5:00pm -
                                6:00pm
                            </small>
                        </li>
                        <br>
                        <li><span>Throne Room Experience(TRE)  </span>&nbsp;<br>
                            <small>2nd Friday Every month 6:00pm - 8:00pm</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== SERVICES END  =========================== -->
    <!-- =========================== YEAR BANNER AREA START  =========================== -->

    <section class="banner_area ">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{asset('images/banner.jpeg')}}">
            </div>
        </div>
    </section>
    <!-- =========================== YEAR BANNER AREA END  =========================== -->


    <!-- =========================== UPCOMING EVENTS BEGIN  =========================== -->
    <div class="bannertitle">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <hr class="hr-events">
            </div>
        </div>
    </div>
    <section class="event_blog_area section_gap">
        <div class="container">
            <span class="section-heading">Upcoming Events</span>
            {{--<div class="section_title text-center">--}}
            {{--<h2>Upcoming Events</h2>--}}
            {{--<p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast</p>--}}
            {{--</div>--}}
            <div class="row">
                <div class="col-md-4">
                    <div class="event_post">
                        <img src="{{asset('images/cr.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Cross Over Service 2019</h2></a>
                        <ul class="list_style sermons_category event_category">
                            <li class="text-muted"><i class="far fa-calendar-alt mr-3"></i>Monday, 31<sup>st</sup>
                                December,
                                2018
                            </li>
                            <li class="text-muted"><i class="fas fa-landmark mr-3"></i>House of Grace Church</li>
                            <li class="text-muted"><i class="fas fa-location-arrow mr-3"></i>Opp. Noble Hotel,
                                Eldoret,
                                Kenya
                            </li>
                        </ul>
                        {{--<a href="#" class="btn btn_hover">View Details</a>--}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event_post">
                        <img src="{{asset('images/cr.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Cross Over Service 2019</h2></a>
                        <ul class="list_style sermons_category event_category">
                            <li class="text-muted"><i class="far fa-calendar-alt mr-3"></i>Monday, 31<sup>st</sup>
                                December,
                                2018
                            </li>
                            <li class="text-muted"><i class="fas fa-landmark mr-3"></i>House of Grace Church</li>
                            <li class="text-muted"><i class="fas fa-location-arrow mr-3"></i>Opp. Noble Hotel, Eldoret,
                                Kenya
                            </li>
                        </ul>
                        {{--<a href="#" class="btn btn_hover">View Details</a>--}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event_post">
                        <img src="{{asset('images/cr.jpg')}}" alt="">
                        <a href="#"><h2 class="event_title">Cross Over Service 2019</h2></a>
                        <ul class="list_style sermons_category event_category">
                            <li class="text-muted"><i class="far fa-calendar-alt mr-3"></i>Monday, 31<sup>st</sup>
                                December,
                                2018
                            </li>
                            <li class="text-muted"><i class="fas fa-landmark mr-3"></i>House of Grace Church</li>
                            <li class="text-muted"><i class="fas fa-location-arrow mr-3"></i>Opp. Noble Hotel, Eldoret,
                                Kenya
                            </li>
                        </ul>
                        {{--<a href="#" class="btn btn_hover">View Details</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== UPCOMING EVENTS END  =========================== -->

    <!-- =========================== LOCATION GOOGLE MAPS BEGIN  =========================== -->
    <section class="location">

        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.320092881928!2d35.29712027301637!3d0.5103488738452574!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske!4v1541514397576"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
    </section>
    <!-- =========================== LOCATION GOOGLE MAPS END  =========================== -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            // Declare Carousel jquery object
            var owl = $('.owl-carousel');
            // Carousel initialization
            owl.owlCarousel({
                loop: true,
                // margin:0,
                navSpeed: 500,
                nav: false,
                autoplay: true,
                rewind: true,
                dots: true,
                items: 1
            });

            // add animate.css class(es) to the elements to be animated
            function setAnimation(_elem, _InOut) {
                // Store all animationend event name in a string.
                // cf animate.css documentation
                const animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend ' +
                    'animationend';

                _elem.each(function () {
                    const $elem = $(this);
                    const $animationType = 'animated ' + $elem.data('animation-' + _InOut);

                    $elem.addClass($animationType).one(animationEndEvent, function () {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                    });
                });
            }

// Fired before current slide change
            owl.on('change.owl.carousel', function (event) {
                const $currentItem = $('.owl-item', owl).eq(event.item.index);
                const $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation($elemsToanim, 'out');
            });

// Fired after current slide has been changed
            let round = 0;
            owl.on('changed.owl.carousel', function (event) {
                const $currentItem = $('.owl-item', owl).eq(event.item.index);
                const $elemsToanim = $currentItem.find("[data-animation-in]");
                setAnimation($elemsToanim, 'in');
            })

            owl.on('translated.owl.carousel', function (event) {
                // console.log (event.item.index, event.page.count);

                if (event.item.index === (event.page.count - 1)) {
                    if (round < 1) {
                        round++;
                        // console.log (round);
                    } else {
                        owl.trigger('stop.owl.autoplay');
                        const owlData = owl.data('owl.carousel');
                        owlData.settings.autoplay = false; //don't know if both are necessary
                        owlData.options.autoplay = false;
                        owl.trigger('refresh.owl.carousel');
                    }
                }
            });

        });

        $('#date-countdown').countdown('2018/12/31', function (event) {
            var $this = $(this).html(event.strftime(''
                + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
                + '<span class="countdown-block"><span class="label">%d</span> days </span>'
                + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
                + '<span class="countdown-block"><span class="label">%M</span> min </span>'
                + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
        });

    </script>
@endsection