@extends('layouts.manage')
@section('content')
    {{--<div class="flex-container">--}}
        {{--<div class="columns m-t-10">--}}
            {{--<div class="column">--}}
                {{--<h1 class="title">Manage Permissions</h1>--}}
            {{--</div>--}}
            {{--<div class="column">--}}
                {{--<a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right">--}}
                    {{--<i class="fa fa-user-plus m-r-10"></i>--}}
                    {{--Create New Permission--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<hr class="m-t-0">--}}

        {{--<div class="card">--}}
            {{--<div class="card-content">--}}
                {{--<table class="table is-narrow">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Slug</th>--}}
                        {{--<th>Description</th>--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($permissions as $permission)--}}
                        {{--<tr>--}}
                            {{--<th>{{$permission->display_name}}</th>--}}
                            {{--<td>{{$permission->name}}</td>--}}
                            {{--<td>{{$permission->description}}</td>--}}
                            {{--<td class="has-text-right">--}}
                                {{--<a href="{{route('permissions.show', $permission->id)}}" class="button is-outlined is-small m-r-5">--}}
                                    {{--View--}}
                                {{--</a>--}}
                                {{--<a href="{{route('permissions.edit', $permission->id)}}" class="button is-outlined is-small--}}
                            {{--">--}}
                                    {{--Edit--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Permissions List</h4>
                        <div class="add-product">
                            <a href="{{route('permissions.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10"></i>Add
                                Departments</a>
                        </div>
                        <div class="asset-inner">
                            <table>

                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Settings</th>

                                </tr>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><b>{{$permission->display_name}}</b></td>
                                        <td>{{$permission->name}}</td>
                                        <td>{{$permission->description}}</td>
                                        <td>
                                <a href="{{route('permissions.show', $permission->id)}}"  data-toggle="tooltip"
                                   title="View"
                                   class="pd-setting-ed button m-r-5"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{route('permissions.edit', $permission->id)}}" data-toggle="tooltip"
                                   title="Edit"
                                   class="pd-setting-ed button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </table>
    </div>

</div>
</div>
</div>
</div>
</div>
@endsection