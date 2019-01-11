@extends('layouts.manage')


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
                              <a href="{{route('daily.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                  Dailies</a>
                              <a href="{{route('daily.edit',  $daily->id)}}" class=" m-r-10 button is-primary is-pulled-right
">Edit
                                  Dailies</a>


                          </div>
                          <div class="col-md-12">
                              <div class="card">
                                  <header class="card-header">
                                      <p class="card-header-title">Title : {{ $daily->title }}</p>
                                  </header>
                                  <div class="card-content">
                                      <div class="content">
                                          {!! $daily->content !!}
                                      </div>
                                  </div>
                                  <footer class="card-footer">
                                      <p class="card-footer-item m-l-10 m-t-10">By: {{ $daily->by }}</p>

                                  </footer>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

