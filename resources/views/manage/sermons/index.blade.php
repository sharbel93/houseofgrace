@extends('layouts.manage')


@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h2>Sermons</h2>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('sermon.create')}}" class="button is-primary is-pulled-right ">Create
                                    Sermon</a>

                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered is-hoverable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Sermon Date</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sermons as $sermon)
                                        <tr>
                                            <th scope="row">{{ $sermon->id }}</th>
                                            <td>{{ $sermon->title }}</td>
                                            <td>{{ $sermon->preacher }}</td>
                                            <td> {{ date('M j, Y', strtotime($sermon->created )) }}</td>
                                            <td>{{ substr(strip_tags($sermon->content),0 , 50 ) }} {{ strlen
                                                (strip_tags
                                                ($sermon->content)) > 50 ? "..." : "" }}</td>
                                            <td><a href="{{ route('sermon.show', $sermon->id) }}" class="button btn-sm
                                            is-primary"    >
                                                    View</a> <a href="{{ route('sermon.edit', $sermon->id) }}"
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

