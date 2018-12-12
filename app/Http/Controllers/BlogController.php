<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Post;
use App\Category;


class BlogController extends Controller
{
    public function getIndex(){
        $slides = Post::orderBy('created_at', 'desc')->get()->take(3);
        $popular = Post::inRandomOrder()->get()->take(5);
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.index')->withPosts($posts)->withPopulars($popular)->withSlides($slides)->withCategories
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

            //tags
    public function getTag($name){
        $tagname = Tag::where('name', '=', $name)->first();
        $popular = Post::inRandomOrder()->get()->take(5);
        $posts = Post::whereHas('tags', function ($query) use ($name){
           $query->where('name', $name);
        })->orderBy('created_at', 'desc')->paginate(8);
        if($posts->count() == 0){
            return redirect()->back();
        }

        return view('blog.tag')
            ->withPosts($posts)
            ->withTagged($tagname)
            ->withPopulars($popular);
    }

          // categories
    public function getCategories($name){
        $category = Category::where('name', '=',$name)->first();
        $posts = Post::where('category_id',$category->id)->orderBy('created_at','desc')->paginate(8);
        return view('blog.category')
            ->withPosts($posts)
            ->withCategory($category);
    }


}
