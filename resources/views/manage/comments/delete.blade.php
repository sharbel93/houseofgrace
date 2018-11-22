@extends('layouts.app')
@section('title', '| DELETE COMMENT?')


@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>DELETE THIS COMMENT</h1>
            <p>
                <strong>Name:</strong> {{ $comment->name }}<br>
                <strong>Email:</strong> {{ $comment->email }}<br>
                <strong>Comment:</strong> {{ $comment->comment }}

                {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
                {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger'])
                 }}

                {{   Form::close() }}

            </p>
        </div>
    </div>

@endsection