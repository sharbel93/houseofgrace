@extends('layouts.manage')

@section('styles')
    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=your_API_key"></script>--}}
    {{--<script src="{{asset('admin/js/tinymce.min.js')}}"></script>--}}
    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ywgkbg9892vgo6omh0v00dd8vyu1ogqne2md5jipypd66uis"></script>--}}
    {{--<script>tinymce.init({ selector:'textarea',--}}
            {{--plugins: 'link code image'});</script>--}}
    <style type="text/css">
        /* Limit image width to avoid overflow the container */
        img {
            max-width: 100%;
            padding: 5px; /* This rule is very important, please do not ignore this! */
        }

        #canvas-three {
            height: 250px;
            width: 250px;
            background-color: #f0f0f0f0;
            cursor: default;
            border: 1px solid gold ;;
        }

    </style>
    <link rel="stylesheet" href="{{asset('/js/summernote.css')}}">

@endsection
@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="flex-container">
                            <div class="columns m-t-10 m-b-0">
                                <div class="column">
                                    <h1 class="title is-admin is-4">Add New Blog Post</h1>
                                </div>
                                {{--<div class="column">--}}
                                    {{--<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">--}}
                                    {{--<i class="fa fa-user-add m-r-10"></i> Create New User--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            </div>
                            <hr class="m-t-0">

                            <div class="container-fluid">

                            <form action="{{route('posts.store')}}" method="POST"  enctype="multipart/form-data" >
                                {{ csrf_field()}}
                             <div class="row">
                                 <b-field>
                                     <b-input  type="text" placeholder="Post Title" size="is-large"
                                               name="title" id="title"
                                               v-model="title"></b-input>
                                 </b-field>
                                 {{--<input type="hidden" name="author_ID" value="{{ Auth::id() }}" />--}}
                                 <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied"
                                              @slug-changed="updateSlug"></slug-widget>
                                 <input type="hidden" v-model="slug" name="slug" id="slug">

                             </div>

                                <div class="row">
                                 <h5 class="m-t-30">Category</h5>
                                    <select  name="category_id" id="category_id" class="mb-2 field
                                        form-control" >
                                        <option value="">Choose Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="row">


                                    <h5 class="m-t-30">Tags</h5>
                                    <select name="tags[]"  id="users" class="mb-2  select-example form-control" multiple="multiple">
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">

                                    <h5 class="m-t-30">Compose your Post  </h5>
                                    <b-field class="m-t-15">
                                        <b-input type="textarea" name="content" id="content" rows="20"
                                                 minlength="10"
                                                 maxlength="500"
                                                 placeholder="Compose your masterpiece ...">
                                        </b-input>
                                    </b-field>
                                </div>
                                <div class="row ">
                                    <h5 class="m-t-30">Upload Image</h5>
                                    <img src="/" alt="">
                                    <input class="m-t-30" type="file" name="thumbnail" id="thumbnail" />
                                </div>
                                <div class="row">

                                    <button type="submit" class="button m-t-30 is-primary
                                                    is-fullwidth">Publish</button>
                                </div>
                                     <!-- end of .column.is-three-quarters -->

                                    {{--<div class="column is-one-quarter-desktop is-narrow-tablet">--}}
                                        {{--<div class="card card-widget">--}}
                                            {{--<div class="author-widget widget-area">--}}
                                                {{--<div class="selected-author">--}}
                                                    {{--<img src="https://placehold.it/50x50" alt="image">--}}
                                                    {{--<div class="author">--}}
                                                        {{--<h4>By: {{ Auth::user()->name }}</h4>--}}
                                                        {{--<p class="subtitle">--}}
                                                            {{--(shaan)--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="post-status-widget widget-area">--}}
                                                {{--<div class="status">--}}
                                                    {{--<div class="status-icon">--}}
                                                        {{--<b-icon  icon="clipboard" size="medium"></b-icon>--}}
                                                        {{--<i class="fas fa-clipboard-list fa-2x"></i>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="status-details">--}}
                                                        {{--<h4> <span class="status-emphasis">Draft</span>Saved</h4>--}}
                                                        {{--<p>A Few Minutes Ago </p>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}

                                            {{--</div>--}}

                                            {{--<div class="publish-buttons-widget widget-area">--}}
                                                {{--<div class="secondary-action-button">--}}
                                                    {{--<button class="button is-info is-outlined is-fullwidth">Save Draft</button>--}}

                                                {{--</div>--}}
                                                {{--<div class="primary-action-button">--}}
                                                    {{--<button type="submit" class="button is-primary--}}
                                                    {{--is-fullwidth">Publish</button>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- end of .column.is-one-quarters -->--}}
                            </form>
                            </div>

                        </div> <!-- end of .container -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                title: '',
                slug: '',
                api_token: '{{Auth::user()->api_token}}'
            },
            methods: {
                updateSlug: function(val) {
                    this.slug = val;
                },
                slugCopied: function(type,msg, val) {
                    notifications.toast(msg, {type: `is-${type}`});
                }
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.select-example').select2({
                placeholder : 'Please select a tag',
                tags: true,
            });

            $('#content').summernote();
        });
    </script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>

    <!-- cropper JS
      ============================================ -->
    {{--<script src="{{asset('admin/js/cropper/cropper.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js"></script>--}}

    {{--<script src="{{asset('admin/js/cropper/cropper-actice.js')}}"></script>--}}

@endsection
