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
                         <div class="row m-b-20">
                             <div class="col-md-6 col-sm-4 col-xs-4">
                                 <h1 >  Edit Event</h1>
                             </div>
                             <div class="col-md-6 col-sm-8 col-xs-8">
                                 <a href="{{route('events.index')}}" class="button is-primary is-pulled-right">
                                     <i class="fa fa-user-add m-r-10"></i> All Events
                                 </a>
                             </div>
                         </div>
                         {!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT', 'files' =>
                         true] ) !!}
                         <div class="row">


                             <div class="col-lg-12 col-md-12">

                                 {{ Form::label('title', 'Event Title:') }}
                                 {{ Form::text('title', null, ['class' => 'form-control form-control-lg'] , ['placeholder' => '.form-control-lg']) }}

                                 {{ Form::label('venue', 'Event Venue:') }}
                                 {{ Form::text('venue', null, ['class' => 'form-control form-control-lg'] ,
                                 ['placeholder' => '.form-control-lg']) }}

                                 {{ Form::label('location', 'Event Location:') }}
                                 {{ Form::text('location', null, ['class' => 'form-control form-control-lg'] ,
                                 ['placeholder' => '.form-control-lg']) }}

                                 {{ Form::label('created', 'Event Date',  ['class' => 'm-t-15']) }}
                                 {{ Form::date('created', null, ['class' => 'form-control form-control-lg']) }}

                                 {{ Form::label('thumbnail', 'Update Image',['class' => 'mb-2 my-2']) }}
                                 {{ Form::file('thumbnail') }}
                                 <img src="{{ asset('/events/images/'.$event->thumbnail) }}" alt="image">
                                 <br>

                                 {{ Form::label('content', 'Event Content:', ['class' => 'form-spacing-top']) }}
                                 {{ Form::textarea('content',null, ['class' => 'form-control']) }}

                                 {{ Form::submit('Save Changes', ['class' => ' m-t-20 btn btn-success btn-block']) }}
                             </div>



                         </div> <!-- end od .row (form) -->
                         {!! Form::close() !!}
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
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear']],
                    ['font', ['fontname','strikethrough', 'superscript', 'subscript']],
                    ['height', ['height']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', ]],
                    ['insert',[ 'link', 'video', 'table', 'hr']],
                    ['formatH6'],
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
