<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>House Of Grace - MANAGEMENT</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('partials.admin.layouts._head')
    @yield('styles')
</head>
<body>

        {{--@include('_includes.nav.main')--}}

        @include('manage.nav.nav')


        <div class="all-content-wrapper" id="app">
            @include('partials.admin.layouts._messages')
            @yield('content')
        </div>

        @include('partials.admin.layouts._footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
@include('partials.admin.layouts._js')
@yield('scripts')
        {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>--}}
        {{--<script type="text/javascript"  >--}}
            {{--var canvas2  = $("#canvas-three"),--}}
                {{--context2 = canvas2.get(0).getContext("2d"),--}}
                {{--$result2 = $('#result-three');--}}

            {{--$('#fileImage-three').on( 'change', function(){--}}
                {{--// canvas2.cropper('destroy');--}}
                {{--if (this.files && this.files[0]) {--}}
                    {{--if ( this.files[0].type.match(/^image\//) ) {--}}
                        {{--var reader2 = new FileReader();--}}
                        {{--reader2.onload = function(evt2) {--}}
                            {{--var img2 = new Image();--}}
                            {{--img2.onload = function() {--}}
                                {{--context2.canvas.height = img2.height;--}}
                                {{--context2.canvas.width  = img2.width;--}}
                                {{--context2.drawImage(img2, 0, 0);--}}
                                {{--var cropper2 = canvas2.cropper({--}}
                                    {{--aspectRatio: 22 / 12--}}
                                {{--});--}}
                                {{--$('#btnCrop-three').click(function() {--}}
                                    {{--// Get a string base 64 data url--}}

                                    {{--var croppedImageDataURL2 = canvas2.cropper('getCroppedCanvas').toDataURL("image/png");--}}


                                    {{--$result2.append( $('<img>').attr('src', croppedImageDataURL2) );--}}
                                    {{--// var croppedImageBlob = canvas.cropper('getCroppedCanvas').toBlob("image/png");--}}
                                    {{--$result2.append( $("<input type='hidden' name='thumbnail'>").attr('value', croppedImageDataURL2) );--}}

                                    {{--// canvas2.cropper('destroy');--}}

                                {{--});--}}
                                {{--$('#btnRestore-three').click(function() {--}}
                                    {{--canvas2.cropper('destroy');--}}
                                    {{--$result2.empty();--}}
                                {{--});--}}
                            {{--};--}}
                            {{--img2.src = evt2.target.result;--}}
                        {{--};--}}
                        {{--reader2.readAsDataURL(this.files[0]);--}}

                    {{--}--}}
                    {{--else {--}}
                        {{--alert("Invalid file type! Please select an image file.");--}}
                    {{--}--}}
                {{--}--}}
                {{--else {--}}
                    {{--alert('No file(s) selected.');--}}
                {{--}--}}
            {{--});--}}
        {{--</script>--}}


</body>
</html>
