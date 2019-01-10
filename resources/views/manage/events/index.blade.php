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
                                       <th scope="col">First</th>
                                       <th scope="col">Last</th>
                                       <th scope="col">Handle</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                   </tr>
                                   <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                   </tr>
                                   <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                   </tr>
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

