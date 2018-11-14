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
                                    <h1 class="title">View User Details</h1>
                                    {{--<h4 class="subtitle"></h4>--}}
                                </div>

                                <div class="column">
                                    <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">
                                        <i class="fa fa-user-add m-r-10"></i> Edit New User
                                    </a>
                                </div>
                            </div>
                            <hr class="m-t-0"\>


                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label for="name" class="label">
                                            Name
                                        </label>
                                        <pre>{{$user->name}}</pre>
                                    </div>

                                    <div class="field">
                                        <label for="email" class="label">
                                            Email
                                        </label>
                                        <pre>{{$user->email}}</pre>
                                    </div>

                                    <div class="field">
                                        <label for="email" class="label">
                                            Roles
                                        </label>
                                        <ul>
                                            {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
                                            @foreach($user->roles as $role)
                                                <li>{{$role->display_name}} ({{$role->description}})</li>
                                            @endforeach
                                        </ul>
                                        {{--<pre>{{$user->roles}}</pre>--}}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of .flex-container -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop