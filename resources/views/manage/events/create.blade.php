@extends('layouts.manage')

@section('styles')
    <link rel="stylesheet" href="{{asset('/js/summernote.css')}}">
@endsection

@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h2>Create Event</h2>
                            </div>
                            <div class="col-md-6 ">

                                <a href="{{route('events.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                    Events</a>

                            </div>
                            <div class="col-md-12">

                                <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" >
                                    {{ csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Event Title</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Event Title">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="venue">Event Venue</label>
                                                <input type="text" class="form-control" id=" venue" name="venue"
                                                       placeholder="Event Venue">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="location">Event Location</label>
                                                <input type="text" class="form-control" id="location" name="location"
                                                       placeholder="Event Location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="start">Event Start Date</label>
                                                <input type="date" class="form-control" id="start" name="start"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="end">Event End Date</label>
                                                <input type="date" class="form-control" id="end" name="end"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="guest">Guest</label>
                                                <input type="text" class="form-control" id="guest" name="guest"
                                                       placeholder="Guest's name">
                                            </div>
                                        </div>
                                    </div>
                               <div class="row">
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                           <label for="thumbnail">Upload Image</label>
                                           <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                           >
                                       </div>
                                   </div>
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                           <label for="host">Host</label>
                                           <input type="text" class="form-control" id="host" name="host"
                                                  placeholder="Host's name">
                                       </div>
                                   </div>
                               </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="content">Event Content</label>
                                                <textarea type="text" class="form-control" id="content" name="content"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#content').summernote({
                height: 180,
                placeholder: 'Event description ...',
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear']],
                    ['font', ['fontname','strikethrough', 'superscript', 'subscript']],
                    ['height', ['height']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['','ul', 'ol', 'paragraph', ]],
                    ['insert',[ 'link', 'video', 'table', 'hr']],
                    ['misc',['fullscreen', 'codeview', 'undo', 'redo', 'help']]
                ],
                popover: {
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ]
                }

            });

        });
    </script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>
@endsection
