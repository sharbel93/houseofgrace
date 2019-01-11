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
                                <a href="{{route('daily.index')}}" class=" m-r-10 button is-primary is-pulled-right
">All
                                    Dailies</a>


                            </div>
                            <div class="col-md-12">

                                <form method="post" action="{{route('daily.store')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Title"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="by">By</label>
                                        <input type="text" class="form-control"  id="by" name="by"
                                               placeholder="Author's name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Message Content</label>
                                        <textarea type="text"
                                                  class="form-control" id="content" name="content"
                                                  required></textarea>
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
            $('#content').summernote({
                height: 180,
                placeholder: 'write your inspiration here ...',
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear']],
                    ['font', ['fontname','strikethrough', 'superscript', 'subscript']],
                    ['height', ['height']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['','ul', 'ol', 'paragraph', ]],
                    ['insert',[ 'link', 'video', 'table', 'hr']],
                    ['misc',['fullscreen', 'codeview', 'undo', 'redo', 'help']]
                ],
                popover: {
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ]
                }

            });

        });
    </script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>
@endsection
