@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="row">
                            <div class="col-md-8">

                                <img src="{{ asset('blog/images/'.$post->image) }}"  >
                                <h1>{{ $post->title }}</h1>
                                <p class="lead"> {!! $post->content !!}</p>

                                <div class="tags">
                                    @foreach($post->tags as $tag)
                                        <span class="badge badge-pill badge-secondary"> {{ $tag->name }}</span>
                                    @endforeach
                                </div>

                                <div class="backend-comments" style="margin-top: 50px">
                                    <h3>
                                        Comments
                                        <small>
                                            {{ $post->comments()->count() }} total
                                        </small>
                                    </h3>

                                    <div class="table-responsive">


                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col" ></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($post->comments as $comment)
                                                <tr>
                                                    {{--<th scope="row">1</th>--}}
                                                    <td>{{ $comment->name }}</td>
                                                    <td>{{ $comment->email }}</td>
                                                    <td>{{ $comment->comment }}</td>
                                                    <td >
                                                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary float-left "><i class="fas fa-pencil-alt"></i> </a>
                                                        <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"> </i> </a>

                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>



                            {{--<div class="col-md-4">--}}
                                {{--<div class="jumbotron">--}}
                                    {{--<ul class="list-group">--}}
                                        {{--<li class="list-group-item list-group-item-dark">--}}
                                            {{--Url Slug : <span > <a href="{{ route('blog.single',$post->slug) }}">{{ route('blog.single',$post->slug)  }}</a></span>--}}
                                        {{--</li>--}}
                                        {{--<li class="list-group-item list-group-item-dark">--}}
                                            {{--<label>Category:</label>--}}
                                            {{--<span class="float-right"><p>{{ $post->category->name }}</p></span>--}}
                                        {{--</li>--}}
                                        {{--<li class="list-group-item list-group-item-dark">--}}
                                            {{--Create At: <span class="float-right">{{ date('M j, Y H:i', strtotime($post->created_at)) }}</span>--}}
                                        {{--</li>--}}
                                        {{--<li class="list-group-item list-group-item-dark">--}}
                                            {{--Last Updated: <span class="float-right">{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<hr>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}--}}
                                            {{--<a href="#" class="btn btn-primary btn-block">Edit</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}--}}
                                            {{--<a href="#" class="btn btn-danger btn-block">Delete</a>--}}
                                            {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}--}}
                                            {{--{!! Form::close() !!}--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--{{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-outline-info btn-block form-spacing-top']) }}--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
