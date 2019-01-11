@extends('layouts.manage')


@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h2>Sermon</h2>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('sermon.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                    Sermons</a>
                                <a href="{{route('sermon.edit',  $sermon->id)}}" class=" m-r-10 button is-primary
                                is-pulled-right
">Edit
                                    Sermons</a>


                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">Title : {{ $sermon->title }}</p>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            {!! $sermon->content !!}
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <p class="card-footer-item m-l-10 m-t-10">Preacher: {{ $sermon->preacher
                                        }}</p>
                                        <p class="card-footer-item m-l-10 m-t-10">Date: {{ $sermon->created }}</p>


                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

