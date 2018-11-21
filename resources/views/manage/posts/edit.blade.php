@extends('layouts.manage')
@section('styles')
    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=your_API_key"></script>--}}
    {{--<script src="{{asset('admin/js/tinymce.min.js')}}"></script>--}}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ywgkbg9892vgo6omh0v00dd8vyu1ogqne2md5jipypd66uis"></script>
    <script>tinymce.init({ selector:'textarea',
            plugins: 'link code image'});</script>

@endsection
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' =>
                        true] ) !!}
                        <div class="row">


                            <div class="col-lg-8 col-md-8">

                                {{ Form::label('title', 'Title:') }}
                                {{ Form::text('title', null, ['class' => 'form-control form-control-lg'] , ['placeholder' => '.form-control-lg']) }}

                                {{ Form::label('slug', 'Slug:',  ['class' => 'form-spacing-top']) }}
                                {{ Form::text('slug', null, ['class' => 'form-control '] ) }}

                                {{ Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) }}
                                {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

                                {{ Form::label('tags', 'Tags:', ['class' => 'mb-2 my-2']) }}
                                {{ Form::select('tags[]', $tags, null, ['id' => 'users', 'class' => 'form-control select-example',
                                'multiple' => 'multiple']) }}

                                {{ Form::label('thumbnail', 'Update Feature',['class' => 'mb-2 my-2']) }}
                                {{ Form::file('thumbnail') }}

                                {{ Form::label('content', 'Body:', ['class' => 'form-spacing-top']) }}
                                {{ Form::textarea('content',null, ['class' => 'form-control']) }}

                            </div>



                            <div class="col-md-4 col-lg-4">
                                <div class="jumbotron">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-dark">
                                            Create At: <span class="float-right">{{ date('M j, Y H:i', strtotime($post->created_at)) }}</span>
                                        </li>
                                        <li class="list-group-item list-group-item-dark">
                                            Last Updated: <span class="float-right">{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</span>
                                        </li>
                                    </ul>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Html::linkRoute('posts.show', 'Cancel ', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                                            {{--<a href="#" class="btn btn-primary btn-block">Edit</a>--}}
                                        </div>

                                        <div class="col-sm-6">
                                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                                            {{--<a href="#" class="btn btn-danger btn-block">Delete</a>--}}
                                            {{--{!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block')) !!}--}}
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div> <!-- end od .row (form) -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    {{--<script>--}}
        {{--var app = new Vue({--}}
            {{--el: '#app',--}}
            {{--data: {--}}
                {{--title: '{{$post->title}}',--}}

            {{--}--}}
        {{--});--}}
    {{--</script>--}}
    <script>
        $(document).ready(function(){
            $('.select-example').select2({
                // placeholder : 'Please select a tag',
                tags: true
            });
        });
    </script>


    <!-- cropper JS
      ============================================ -->
    {{--<script src="{{asset('admin/js/cropper/cropper.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js"></script>--}}

    {{--<script src="{{asset('admin/js/cropper/cropper-actice.js')}}"></script>--}}

@endsection
