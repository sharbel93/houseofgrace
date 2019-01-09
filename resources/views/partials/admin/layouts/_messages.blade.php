
{{--@if ($message = Session::get('success'))--}}
    {{--<div class="alert alert-success alert-block">--}}
        {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
        {{--<strong>{{ $message }}</strong>--}}
    {{--</div>--}}
{{--@endif--}}


{{--@if ($message = Session::get('error'))--}}
    {{--<div class="alert alert-danger alert-block">--}}
        {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
        {{--<strong>{{ $message }}</strong>--}}
    {{--</div>--}}
{{--@endif--}}

<div class="container-fluid">
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>