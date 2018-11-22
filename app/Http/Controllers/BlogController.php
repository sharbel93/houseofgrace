<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Post;
use App\Category;


class BlogController extends Controller
{
    public function getIndex(){
        $slide = Post::orderBy('created_at', 'desc')->get()->take(3);
        $popular = Post::inRandomOrder()->get()->take(5);
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.index')->withPosts($posts)->withPopulars($popular)->withSlides($slide)->withCategories
            ($categories)->withTags($tags);
    }


    public function getSingle($slug) {
        // fetch from the DB based on the slug
        $post = Post::where('slug', '=', $slug)->first();
        $popular = Post::inRandomOrder()->get()->take(5);
        $categories = Category::all();
        $tags = Tag::all();
        $previous= Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $next= Post::where('id', '>', $post->id)->orderBy('id')->first();
        // return the view and pass in the post object
        return view('blog.single')->with(compact('post','previous', 'next'))->withPopulars($popular)->withCategories
        ($categories)->withTags($tags);
    }


}
