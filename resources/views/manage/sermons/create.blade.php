@extends('layouts.manage')

@section('styles')
    <link rel="stylesheet" href="{{asset('/js/summernote.css')}}">
@endsection

@section('content')


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h2>Daily Inspiration</h2>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('daily.create')}}" class=" m-r-10 button is-primary is-pulled-right ">Create
                                    Dailies</a>
                                <a href="{{route('daily.create')}}" class=" m-r-10 button is-primary is-pulled-right
">Create
                                    Dailies</a>

                            </div>
                            <div class="col-md-12">

                                <form>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="by">By</label>
                                        <input type="text" class="form-control" id="by" name="by"
                                               placeholder="Author's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="by">By</label>
                                        <input type="date" class="form-control" id="created" name="created"
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Message Content</label>
                                        <textarea type="text" class="form-control" id="content" name="content"
                                        ></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#content').summernote();
        });
    </script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>
@endsection
