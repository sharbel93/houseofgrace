<div class="post_tag">
    @foreach($post->tags as $tag)
        <a href="#"> {{ $tag->name }}</a>
        {{--{{ $tag->name }}--}}
    @endforeach
</div>
<ul class="blog_meta list_style">
    <li><a href="" class="m-r-10" >{{ $post->users->name }}</a><i class="fas
                                        fa-user"></i></li>
    <li><a href="#">{{ date('M j, Y', strtotime($post->created_at)) }}<i class="fas fa-calendar-alt"></i></a></li>
    {{--<li><a href="#">1.2M Views<i class="far fa-eye"></i></a></li>--}}
    <li><a href="#">{{ $post->comments()->count() }} Comments<i class="far fa-comment"></i></a></li>
</ul>