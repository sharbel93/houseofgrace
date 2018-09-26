@extends('layouts.app')
@section('content')
    <div class="owl-carousel owl-theme">
        <!-- first slide -->
        <div class="item " >
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">

            <h4 class data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Slide 1</h4>
            <h6 data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                Cras a elementum dolor. Praesent aliquam sapien ac eros semper ullamcorper. Sed imperdiet enim at
                sodales suscipit. Aenean eget faucibus ipsum.
            </h6>

            </div>
        </div>

        <!-- second slide-->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">

            <div class="bottom-left">
                <h4 class data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Slide 2</h4>
                <h6 data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Nunc id dolor pulvinar, mollis orci vitae, molestie elit. Maecenas scelerisque ipsum nibh, id imperdiet nulla lobortis nec.</h6>

            </div>
        </div>

        <!-- third slide -->
        <div class="item">
            <img src="{{asset('images/d.jpg')}}">
            <div class="bottom-left">
                <h4 class data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Slide 3</h4>
                <h6 data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft">
                Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Nunc id dolor pulvinar, mollis orci vitae, molestie elit. Maecenas
                scelerisque ipsum nibh, id imperdiet nulla lobortis nec.<h6/>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
            // Declare Carousel jquery object
            var owl = $('.owl-carousel');

            // Carousel initialization
            owl.owlCarousel({
                loop: true,
                margin:0,
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
                var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                _elem.each ( function () {
                    var $elem = $(this);
                    var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                    $elem.addClass($animationType).one(animationEndEvent, function () {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                    });
                });
            }

// Fired before current slide change
            owl.on('change.owl.carousel', function(event) {
                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation ($elemsToanim, 'out');
            });

// Fired after current slide has been changed
            var round = 0;
            owl.on('changed.owl.carousel', function(event) {

                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-in]");

                setAnimation ($elemsToanim, 'in');
            })

            owl.on('translated.owl.carousel', function(event) {
                console.log (event.item.index, event.page.count);

                if (event.item.index == (event.page.count - 1))  {
                    if (round < 1) {
                        round++
                        console.log (round);
                    } else {
                        owl.trigger('stop.owl.autoplay');
                        var owlData = owl.data('owl.carousel');
                        owlData.settings.autoplay = false; //don't know if both are necessary
                        owlData.options.autoplay = false;
                        owl.trigger('refresh.owl.carousel');
                    }
                }
            });

        });
    </script>
@endsection