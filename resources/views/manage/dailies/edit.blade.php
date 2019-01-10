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
                                <h2>Daily Inspiration</h2>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('daily.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                    Dailies</a>


                            </div>
                            <div class="col-md-12">

                                {!! Form::model($daily, ['route' => ['daily.update', $daily->id], 'method' => 'PUT']
                                ) !!}


                                        {{ Form::label('title', 'Title') }}
                                        {{ Form::text('title', null, ['class' => 'form-control form-control-lg'] ,
                                        ['placeholder' => '.form-control-lg']) }}
                                {{ Form::label('by', 'By') }}
                                        {{ Form::text('by', null, ['class' => 'form-control form-control-lg'] ,
                                        ['placeholder' => '.form-control-lg']) }}



                                        {{ Form::label('content', 'Message Content', ['class' => 'form-spacing-top']) }}
                                        {{ Form::textarea('content',null, ['class' => 'form-control']) }}
                                {{ Form::submit('Save Changes', ['class' => ' m-t-15 btn btn-success btn-block']) }}
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
                    ['style', ['bold', 'italic', 'underline', 'clear']],
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


