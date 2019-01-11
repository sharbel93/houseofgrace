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
                                <h2>Church Sermons</h2>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('sermon.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                    Sermons</a>


                            </div>
                            <div class="col-md-12">

                                {!! Form::model($sermon, ['route' => ['sermon.update', $sermon->id], 'method' => 'PUT']
                                ) !!}


                                {{ Form::label('title', 'Sermon Title', ['class' => 'm-t-15']) }}
                                {{ Form::text('title', null, ['class' => 'form-control form-control-lg'] ,
                                ['placeholder' => '.form-control-lg']) }}

                                {{ Form::label('preacher', 'Preacher', ['class' => 'm-t-15']) }}
                                {{ Form::text('preacher', null, ['class' => 'form-control form-control-lg'] ,
                                ['placeholder' => '.form-control-lg']) }}

                                {{ Form::label('created', 'Sermon Date',  ['class' => 'm-t-15']) }}
                                {{ Form::date('created', null, ['class' => 'form-control form-control-lg']) }}


                                {{ Form::label('content', 'Sermon Message Content', ['class' => 'form-spacing-top
                                m-t-15']) }}
                                {{ Form::textarea('content',null, ['class' => 'form-control']) }}
                                {{ Form::submit('Save Changes', ['class' => ' m-t-20 btn btn-success btn-block']) }}
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
