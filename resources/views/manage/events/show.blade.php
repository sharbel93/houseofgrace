@extends('layouts.manage')


@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                  <div class="container-fluid">
                      <div class="row m-b-30">
                          <div class="col-md-6 col-sm-4 col-xs-4">
                              <h1 >  Show Event</h1>
                          </div>
                          <div class="col-md-6 col-sm-8 col-xs-8">
                              <a href="{{route('events.index')}}" class="button is-primary is-pulled-right">
                                  <i class="fa fa-user-add m-r-10"></i> All Events
                              </a>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="col-md-5">
                              <figure class="image ">
                                  <img  src="{{ asset('events/images/'.$event->thumbnail)}}"
                                        alt="event image">
                              </figure>
                          </div>
                          <div class="col-md-7">
                              <div class="card" style="width: 18rem;">
                                  <header class="card-header">
                                      <p class="card-header-title">
                                          Title : {{ $event->title }}
                                      </p>
                                  </header>
                                  <div class="card-content">

                                      <div class="card-content">
                                          {!! $event->content !!}
                                      </div>
                                  </div>

                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Date: {{ $event->created
                                        }}</li>
                                      <li class="list-group-item">Location: {{ $event->location }}</li>
                                      <li class="list-group-item">Venue: {{ $event->venue }}</li>
                                  </ul>
                              </div>
                          </div>

                      </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

