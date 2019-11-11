@extends('layouts.manage')


@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                       <div class="container-fluid">
                           <div class="col-md-6">
                               <h2>Events</h2>
                           </div>
                           <div class="col-md-6 ">
                               <a href="{{route('events.create')}}" class="button is-primary is-pulled-right ">Create
                                   Event</a>

                           </div>
                           <div class="col-md-12">
                               <table class="table table-bordered is-hoverable">
                                   <thead>
                                   <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">title</th>
                                       <th scope="col">venue</th>
                                       <th scope="col">location</th>
                                       <th scope="col">thumbnail</th>
                                       <th scope="col">start</th>
                                       <th scope="col">end</th>
                                       <th scope="col">manage</th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   @foreach($events as $event)
                                       <tr>
                                           <th scope="row">1</th>
                                           <td>{{ $event->title }}</td>
                                           <td>{{ $event->venue }} </td>
                                           <td>{{ $event->location }}</td>
                                           <td><ul class="list-inline">
                                                   <li>
                                                       <img src="{{ asset('events/images/'.$event->thumbnail) }}"
                                                            width="80" class=" img-responsive" alt="image" />
                                                   </li>

                                               </ul></td>
{{--                                           <td>{{ substr(strip_tags($event->content),0 , 50 ) }} {{ strlen--}}
{{--                                                (strip_tags--}}
{{--                                                ($event->content)) > 50 ? "..." : "" }}</td>--}}
                                           <td>{{ date('M j, Y', strtotime($event->start )) }}</td>
                                           <td>{{ date('M j, Y', strtotime($event->end )) }}</td>

                                           <td><a href="{{ route('events.show', $event->id) }}" class="btn
                                                btn-info btn-sm btn-outline-info ">View</a>
                                               <a href="{{ route('events.edit',$event->id) }}" class="btn btn-primary btn-sm">Edit</a>
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

@stop

