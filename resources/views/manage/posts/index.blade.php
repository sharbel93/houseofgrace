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
                                    <h1 class="title">  All Posts</h1>
                                </div>
                                <div class="column">
                                    <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                                        <i class="fa fa-user-add m-r-10"></i> Create New Post
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                        <tr >
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Body</th>
                                            <th scope="col">Created At</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)

                                            <tr class="table-primary">
                                                <th scope="row">{{ $post->id }}</th>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->users->name }}</td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <img src="{{ asset('posts/images/'.$post->image) }}"
                                                                 width="80" class=" img-responsive" alt="image" />
                                                        </li>

                                                    </ul>
                                                </td>
                                                <td>{{$post->category->name}}</td>
                                                <td>{{ substr(strip_tags($post->content),0 , 50 ) }} {{ strlen(strip_tags
                                                ($post->content)) > 50 ? "..." : "" }}</td>
                                                <td>{{ date('M j, Y', strtotime($post->created_at )) }}</td>
                                                <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-light btn-sm ">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-light  btn-sm ">Edit</a></td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>

                                    <div class="text-center">
                                        {!! $posts->links(); !!}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of .container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
