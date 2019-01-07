@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-4">
                                    <h1 >  All Posts</h1>
                                </div>
                                <div class="col-md-6 col-sm-8 col-xs-8">
                                    <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                                        <i class="fa fa-user-add m-r-10"></i> Create New Post
                                    </a>
                                </div>
                            </div>
                            {{--<div class="columns m-t-10">--}}
                                {{--<div class="column is-three-quarters-desktop is-three-quarters-tablet">--}}
                                    {{--<h1 class="title">  All Posts</h1>--}}
                                {{--</div>--}}
                                {{--<div class="column is-one-quarter-desktop is-one-quarter-tablet ">--}}
                                    {{--<a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">--}}
                                        {{--<i class="fa fa-user-add m-r-10"></i> Create New Post--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <hr>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="table-container">

                                    <table class="table">
                                        <thead>
                                        <tr >
                                            <th scope="col" >#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col" class="hidden-xs hidden-sm">Author</th>
                                            <th scope="col" class="hidden-xs hidden-sm">Thumbnail</th>
                                            <th scope="col" class="hidden-xs hidden-sm">Category</th>
                                            <th scope="col" class="hidden-xs hidden-sm">Body</th>
                                            <th scope="col" class="hidden-xs hidden-sm">Created At</th>
                                            <th scope="col">Manage</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)

                                            <tr class="table-primary">
                                                <td class="mt-5">{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td class="hidden-xs hidden-sm">{{ $post->users->name }}</td>
                                                <td class="hidden-xs hidden-sm">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <img src="{{ asset('posts/images/'.$post->image) }}"
                                                                 width="80" class=" img-responsive" alt="image" />
                                                        </li>

                                                    </ul>
                                                </td>
                                                <td class="hidden-xs hidden-sm">{{$post->category->name}}</td>
                                                <td class="hidden-xs hidden-sm">{{ substr(strip_tags($post->content),0 , 50 ) }} {{ strlen
                                                (strip_tags
                                                ($post->content)) > 50 ? "..." : "" }}</td>
                                                <td class="hidden-xs hidden-sm">{{ date('M j, Y', strtotime($post->created_at )) }}</td>
                                                <td><a href="{{ route('posts.show', $post->id) }}" class="btn
                                                btn-info btn-sm btn-outline-info ">View</a> <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    </div>

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
