@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Permissions List</h4>
                        <div class="add-product">
                            <a href="{{route('permissions.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10"></i>Create New Permission</a>
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