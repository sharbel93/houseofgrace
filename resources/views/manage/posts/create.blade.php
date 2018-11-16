@extends('layouts.manage')

@section('styles')

    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=your_API_key"></script>--}}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',
            plugins: 'link code image'});</script>

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
                                <div class="column">
                                    {{--<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">--}}
                                    {{--<i class="fa fa-user-add m-r-10"></i> Create New User--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                            <hr class="m-t-0">

                            <form action="{{route('posts.store')}}" method="post">
                                {{ csrf_field()}}
                                <div class="columns">
                                    <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                                        <b-field>
                                            <b-input  type="text" placeholder="Post Title" size="is-large" v-model="title"></b-input>
                                        </b-field>

                                        <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied"
                                                     @slug-changed="updateSlug"></slug-widget>
                                        <input type="hidden" v-model="slug" name="slug">
                                        <label class="label">Category </label>
                                        <select  name="category_id" class="mb-2  field form-control"  value="{{ old('category_id') }}">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                        <label class="label">Tags</label>
                                        <select name="tags[]"  id="users" class="mb-2 field select-example form-control"
                                                multiple="multiple">
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                        <b-field class="m-t-40">
                                            <b-input type="textarea" rows="5"
                                                     {{--minlength="10"--}}
                                                     {{--maxlength="500"--}}
                                                     placeholder="Compose your masterpiece ...">
                                            </b-input>
                                        </b-field>
                                        <div class="col-md-6">


                                            <input type="file" id="fileImage-three"  class="form-control" accept="image/*"  />
                                        </div>

                                        <div class="col-md-6">
                                            <div class="col-xs-6">
                                                <input type="button" class="btn btn-default btn-sm" id="btnCrop-three" value="Crop" />
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="button" class="btn btn-default btn-sm" id="btnRestore-three" value="Restore" />
                                            </div>
                                        </div>



                                    </div> <!-- end of .column.is-three-quarters -->

                                    <div class="column is-one-quarter-desktop is-narrow-tablet">
                                        <div class="card card-widget">
                                            <div class="author-widget widget-area">
                                                <div class="selected-author">
                                                    <img src="https://placehold.it/50x50" alt="image">
                                                    <div class="author">
                                                        <h4>By: Sharbel Chris</h4>
                                                        <p class="subtitle">
                                                            (shaan)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="post-status-widget widget-area">
                                                <div class="status">
                                                    <div class="status-icon">
                                                        {{--<b-icon  icon="clipboard" size="medium"></b-icon>--}}
                                                        <i class="fas fa-clipboard-list fa-2x"></i>
                                                    </div>
                                                    <div class="status-details">
                                                        <h4> <span class="status-emphasis">Draft</span>Saved</h4>
                                                        <p>A Few Minutes Ago </p>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="publish-buttons-widget widget-area">
                                                <div class="secondary-action-button">
                                                    <button class="button is-info is-outlined is-fullwidth">Save Draft</button>

                                                </div>
                                                <div class="primary-action-button">
                                                    <button class="button is-primary is-fullwidth">Publish</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end of .column.is-one-quarters -->


                                </div>
                            </form>

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
                tags: true
            });
        });
    </script>



@endsection
