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
                                    <h1 class="title">Create New Users</h1>

                                </div>
                                <div class="column">
                                    <a href="{{route('users.index')}}" class="button btn-primary is-pulled-right"><i
                                                class="fa
                                    fa-user-plus
                            m-r-10"></i>View Users</a>
                                </div>

                            </div>
                            <hr class="m-t-0">

                            <form action="{{route('users.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="columns">
                                    <div class="column">
                                        <div class="columns">
                                            <div class="column">
                                                <div class="field">
                                                    <label for="name" class="label">Name :</label>
                                                    <p class="control">
                                                        <input type="text" class="input" name="name" id="name">
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <label for="email" class="label">Email :</label>
                                                    <p class="control">
                                                        <input type="text" class="input" name="email" id="email">
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <label for="password" class="label">Password :</label>
                                                    <p class="control">
                                                        <input type="text" class="input" name="password" id="password"
                                                               v-if="!auto_password" placeholder="Manually give a  password to this user">
                                                        <b-checkbox  name="auto_generate" class="m-t-15" v-model="auto_password"
                                                        >Auto Generate
                                                            Password</b-checkbox>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        {{--<button class="button is-success">Create User</button>--}}

                                    </div>

                                    <div class="column">
                                        <label for="roles" class="label">Roles</label>
                                        <input type="hidden" name="roles" :value="rolesSelected">
                                        @foreach($roles as $role)
                                            <div class="field">
                                                <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">
                                                    {{$role->display_name}}
                                                </b-checkbox>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column">
                                        <hr />
                                        <button class="button is-primary is-pulled-right" style="width: 250px;">Create New User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
            }
        });
    </script>

@endsection
