@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>Categories</h1>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div> {{-- end of col-md-8--}}

                            <div class="col-md-3">
                                <div class="jumbotron ">
                                    <form action="{{route('categories.store')}}" method="POST">
                                        {{ csrf_field() }}
                                        <h3> New Category</h3>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label for="name" class="label">Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Enter
                                                    Category" />
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="login-horizental">
                                                        <button class="btn btn-sm btn-block btn-primary "
                                                                type="submit">Create New Category</button>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection