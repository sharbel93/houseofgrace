@extends('layouts.manage')
@section('content')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <form action="{{route('tags.update', $tag->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <h3> Edit Tag</h3>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="name" class="label">Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="{{$tag->name}}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="login-horizental">
                                        <button class="btn btn-block btn-primary "
                                                type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection