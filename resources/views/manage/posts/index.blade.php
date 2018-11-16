@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="flex-container">
                            <div class="columns m-t-10">
                                <div class="column">
                                    <h1 class="title">This is the posts.index page</h1>
                                </div>
                                <div class="column">
                                    <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                                        <i class="fa fa-user-add m-r-10"></i> Create New Post
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div> <!-- end of .container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
