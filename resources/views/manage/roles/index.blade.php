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
                <h1 class="title">Manage Roles</h1>
            </div>
            <div class="column">
                <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-add m-r-10"></i> Create New Role
                </a>
            </div>
        </div>
        <hr class="m-t-10">

        <div class="columns is-multiline">
            @foreach($roles as $role)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h3 class="title">{{$role->display_name}}</h3>
                                    <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                                    <p>
                                        {{$role->descriptions}}
                                    </p>
                                </div>

                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.show', $role->id)}}" class="button is-primary
                                   is-fullwidth">Details</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.edit', $role->id)}}" class="button  is-fullwidth">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop