<div class="blog_left_sidebar">
    @foreach($posts as $post)

        <article class="row blog_item">
            <div class="col-md-3">
                <div class="blog_info text-right">
                    @include('partials.main._blogleft')
                </div>
            </div>
            <div class="col-md-9">
                <div class="blog_post">
                    <img src="{{ asset('posts/images/'.$post->image) }}" alt="">
                    <div class="blog_details">
                        <a href="{{route('blog.single', $post->slug)}}"><h2>{{$post->title}}</h2></a>
                        <p>
                            {{ substr(strip_tags($post->content), 0, 250) }} {{ strlen(strip_tags
                                            ($post->content)) > 250 ? '...' : "" }}
                        </p>
                        <a href="{{route('blog.single', $post->slug)}}" class="view_btn button_hover">View More</a>
                    </div>
                </div>
            </div>
        </article>

    @endforeach


    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="text-center">--}}
    {{--{!! $posts->links() !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <nav class="blog-pagination justify-content-center d-flex">
        {!! $posts->links() !!}
    </nav>
</div>