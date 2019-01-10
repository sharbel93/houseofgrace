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
                                <h2>Daily Inspiration</h2>
                            </div>
                            <div class="col-md-6 ">

                                <a href="{{route('daily.create')}}" class=" m-r-10 button is-primary is-pulled-right
">Create
                                    Dailies</a>

                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered is-hoverable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dailys as $daily)
                                        <tr>
                                            <th scope="row">{{ $daily->id }}</th>
                                            <td>{{ $daily->title }}</td>
                                            <td>{{ $daily->by }}</td>
                                            <td>{{ substr(strip_tags($daily->content),0 , 50 ) }} {{ strlen
                                                (strip_tags
                                                ($daily->content)) > 50 ? "..." : "" }}</td>
                                            <td><a href="{{ route('daily.show', $daily->id) }}" class="button btn-sm is-primary"    >
                                                    View</a> <a href="{{ route('daily.edit', $daily->id) }}"
                                                                                                             class="button btn-sm
                                                                                            is-info">Edit</a>
                                                {{--<a href="{{ route('daily.destroy', $$daily->id) }}" class="button--}}
                                                {{--is-danger btn-sm">Delete</a></td>--}}

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

@stop
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#content').summernote();
        });
    </script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>
@endsection

