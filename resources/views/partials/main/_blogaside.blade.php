{{--<aside class="single_sidebar_widget search_widget">--}}
    {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control" placeholder="Search Posts">--}}
        {{--<span class="input-group-btn">--}}
                                        {{--<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>--}}
                                    {{--</span>--}}
    {{--</div><!-- /input-group -->--}}
    {{--<div class="br"></div>--}}
{{--</aside>--}}
<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Popular Posts</h3>
    {{--@php--}}
    {{--$i = 1;--}}
    {{--@endphp--}}
    @foreach($populars as $popular)
        <div class="media post_item">
            <img src="{{asset('posts/images/'.$popular->image)}}"  width="50" height="50" alt="">
            <div class="media-body">
                <a href="{{route('blog.single', $popular->slug)}}"><h3>{{$popular->title}}</h3></a>
                <p> {{count($popular->comments)}} comments</p>
            </div>
        </div>

    @endforeach
    <div class="br"></div>
</aside>
<aside class="single_sidebar_widget ads_widget">
    <a href="#"><img class="img-fluid" src="{{asset('images/add.jpg')}}" alt=""></a>
    <div class="br"></div>
</aside>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Post Categories</h4>
    <ul class="list_style cat-list">
        @foreach($categories as $category)
            <li>
                <a href="{{route('category',$category->name)}}" class="d-flex justify-content-between">
                    <p>{{$category->name}}</p>
                    <p>{{$category->posts->count()}}</p>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="br"></div>
</aside>
{{--<aside class="single-sidebar-widget newsletter_widget">--}}
    {{--<h4 class="widget_title">Newsletter</h4>--}}
    {{--<p>--}}
        {{--Here, I focus on a range of items and features that we use in life without--}}
        {{--giving them a second thought.--}}
    {{--</p>--}}
    {{--<div class="form-group d-flex flex-row">--}}
        {{--<div class="input-group">--}}
            {{--<div class="input-group-prepend">--}}
                {{--<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>--}}
            {{--</div>--}}
            {{--<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">--}}
        {{--</div>--}}
        {{--<a href="#" class="bbtns">Subcribe</a>--}}
    {{--</div>--}}
    {{--<p class="text-bottom">You can unsubscribe at any time</p>--}}
    {{--<div class="br"></div>--}}
{{--</aside>--}}
<aside class="single-sidebar-widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list_style">
        @foreach($tags as $tag)
            <li><a href="{{route('tag',$tag->name)}}">{{ $tag->name }}</a></li>
        @endforeach

    </ul>
</aside>