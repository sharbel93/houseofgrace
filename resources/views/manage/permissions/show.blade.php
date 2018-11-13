@extends('layouts.manage')
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="flex-container">
                            <div class="columns m-t-10">
                                <div class="column">
                                    <h1 class="title">View Permission Details</h1>
                                </div>
                                <div class="column">
                                    <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right">
                                        <i class="fa fa-edit m-r-10"></i>
                                        Edit Permission
                                    </a>
                                </div>
                            </div>
                            <hr class="m-t-0">

                            <div class="columns">
                                <div class="column">
                                    <div class="box">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{$permission->display_name}}</strong>
                                                        <small>{{$permission->name}}</small>
                                                    </p>
                                                    <br>
                                                    {{$permission->description}}
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection