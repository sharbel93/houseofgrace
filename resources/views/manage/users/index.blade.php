@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Manage Users</h4>
                        <div class="add-product">
                            <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-plus
                            m-r-10"></i>Create New User</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Created</th>
                                    <th>Settings</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><b>{{$user->id}}</b></td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at->toFormattedDateString()}}</td>
                                        <td >
                                            <a href="{{route('users.show', $user->id)}}"  data-toggle="tooltip"
                                               title="View"
                                               class="pd-setting-ed button m-r-5"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('users.edit', $user->id)}}" data-toggle="tooltip"
                                               title="Edit"
                                               class="pd-setting-ed button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
@stop