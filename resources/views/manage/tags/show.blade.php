@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>{{ $tag->name }} Tag  <small class="text-muted">{{$tag->posts()->count()}} Posts</small></h1>

                            </div>
                            <div class="col-md-2 ">
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-md btn-primary my-3 btn-block" >Edit</a>
                            </div>

                            <div class="col-md-2">
                                <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-block btn-danger " type="submit">Delete</button>

                                </form>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tag->posts as $post)
                                        <tr>
                                            <td scope="row">{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                @foreach ($post->tags as $tag)
                                                    <span class="badge  badge-secondary">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-outline-secondary btn-xs"> View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection