@extends('layouts.app')
@section('content')
    <!-- =========================== SLIDER BEGIN  =========================== -->
    <div class="owl-carousel owl-theme">
        <!-- first slide -->
        <div class="item " >
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">

                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Powerful
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                    Sermons
                </div>
            </div>
        </div>
        <!-- second slide-->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Heart of
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                    Worship
                </div>
            </div>
        </div>
        <!-- third slide -->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Blast Youth
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                     Ministry
                </div>
            </div>
        </div>
        <!-- fourth slide -->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <div class="slidertextone" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                    Dynamic Children
                </div>
                <div class="slidertexttwo" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                                 Ministry
                </div>
            </div>
        </div>
    </div>
    <!-- =========================== SLIDER END  =========================== -->


    <!-- =========================== SERVICES BEGIN  =========================== -->
<div class="bannertitle">
    <div class="row">
        <div class="col-md-12">
            <h3 class=" text-center"><span></span>OUR SERVICES</h3>
        </div>
    </div>
</div>

    <section class="services">

    <div class="container">

        <div class="row ">
                <div class="col-md-6 mb-2">
                    <h4 class="text-center">SUNDAY SERVICES</h4>
                    <ul>
                        <li><span>Prayer Service:</span> <span class="float-right mr-3">7:00am - 8:00am</span> </li>
                        <li><span>The Journey :</span> <span class="float-right mr-3">8:00am - 8:50am</span></li>
                        <li><span>Family Service :</span><span class="float-right mr-3"> 9:00am - 12:00pm</span></li>
                        <li><span>Oasis of Grace Childrens Church :</span><span class="float-right mr-3">9:00am -
                                12:00pm</span> </li>
                    </ul>
                </div>
                <div class="col-md-6 ">
                    <h4 class="text-center">OTHER SERVICES</h4>
                    <ul>
                        <li><span>Blast Youth Service :</span> <span class="float-right mr-3">Every fortnight 3:30pm -
                                6:00pm</span></li>
                        <li><span>Prayer BootCamp :</span> <span class="float-right mr-3">Wednesdays 5:30pm -
                                7:30pm</span></li>
                        <li><span>Ladies Prayer Meeting:</span> <span class="float-right mr-3">Tuesdays 5:00pm -
                                6:00pm</span> </li>
                        <li><span>Throne Room Experience(TRE):</span>  <span class="float-right mr-3">2nd Friday
                            </span></li>
                        <li><span class="float-right mr-3">Every month 6:00pm - 8:00pm</span></li>
                    </ul>
                </div>
    </div>
    </div>
    </section>
    <!-- =========================== SERVICES END  =========================== -->


    <!-- =========================== UPCOMING EVENTS BEGIN  =========================== -->
    <div class="bannertitle">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">EVENTS</h3>
            </div>
        </div>
    </div>
    <section class="events">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div>
                        <p> Will be uploaded soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== UPCOMING EVENTS END  =========================== -->

    <!-- =========================== LOCATION GOOGLE MAPS BEGIN  =========================== -->
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.639785944462!2d35.297056!3d0
            .51051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x901065d104b128fe!2sHouse+Of+Grace!5e0!3m2!1sen!2ske
            !4v1537967383843" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- =========================== LOCATION GOOGLE MAPS END  =========================== -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
            // Declare Carousel jquery object
            var owl = $('.owl-carousel');
            // Carousel initialization
            owl.owlCarousel({
                loop: true,
                // margin:0,
                navSpeed:500,
                nav:false,
                autoplay: true,
                rewind: true,
                dots: false,
                items: 1});

            // add animate.css class(es) to the elements to be animated
            function setAnimation ( _elem, _InOut ) {
                // Store all animationend event name in a string.
                // cf animate.css documentation
                const animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend ' +
                    'animationend';

                _elem.each ( function () {
                    const $elem = $(this);
                    const $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                    $elem.addClass($animationType).one(animationEndEvent, function () {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                    });
                });
            }

// Fired before current slide change
            owl.on('change.owl.carousel', function(event) {
                const $currentItem = $('.owl-item', owl).eq(event.item.index);
                const $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation ($elemsToanim, 'out');
            });

// Fired after current slide has been changed
            const round = 0;
            owl.on('changed.owl.carousel', function(event) {

                const $currentItem = $('.owl-item', owl).eq(event.item.index);
                const $elemsToanim = $currentItem.find("[data-animation-in]");

                setAnimation ($elemsToanim, 'in');
            })

            owl.on('translated.owl.carousel', function(event) {
                // console.log (event.item.index, event.page.count);

                if (event.item.index == (event.page.count - 1))  {
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
    </script>
@endsection