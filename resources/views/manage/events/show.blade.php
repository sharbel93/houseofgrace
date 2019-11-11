@extends('layouts.manage')

@section('styles')

    <style type="text/css">
      .ev-header-span{
          font-size: 1rem;
          font-weight: bold;
          padding-bottom: 10px;
      }
      .ev-header-span-content{
          font-size: 1rem;
          font-weight: bold;
          padding-bottom: 10px;
          margin-top: 20px;
      }

    </style>

@endsection
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
                              <div class="row">
                                  <div class="col-lg-4">
                                      <span class="ev-header-span" >Title :</span><br> <p>{{ $event->title }}</p>
                                  </div>
                                  <div class="col-lg-4">
                                      <span class="ev-header-span">Event Start Date:</span> <br>
                                      <p>{{ $event->start
                                            }}</p>
                                  </div>
                                  <div class="col-lg-4">
                                      <span class="ev-header-span">Event End Date:</span> <br>
                                      <p>{{ $event->end
                                        }}</p>
                                  </div>
                              </div>
                              <div class="row mt-5">
                                  <div class="col-lg-4"> <span class="ev-header-span">Location:</span> <br> <p>{{ $event->location }}</p></div>
                                  <div class="col-lg-4"> <span class="ev-header-span">Venue:</span> <br> <p>{{ $event->venue }}</p></div>
                                  <div class="col-lg-4">
                                      <span class="ev-header-span"> Host:</span> <br><p>{{ $event->host }}</p> <br>
                                      <span class="ev-header-span"> Guest:</span> <br><p>{{ $event->guest }}</p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12">
                                      <span class="ev-header-span-content "> Event Description:</span>
                                      <p>{!! $event->content !!}</p>
                                  </div>
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

