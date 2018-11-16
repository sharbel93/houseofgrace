<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Storage;
use File;
use Image;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator|editor|author|contributor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ordering the posts using id number
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        // return a view and pass in the above variable
        return view('manage.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('manage.posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash |min:5 |max: 255|unique:posts,slug',
            'category_id' => 'required|integer',
            'content'=> 'required',
            'image' => 'sometimes'
        ));

        // stroe in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->author_id = Auth::user()->id;

        if (!$request->image == null) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name = str_slug($request->title, $separator = '-').date('His').'.png';
            $path = public_path() . "/images/posts/" . $image_name;
            file_put_contents($path, $data);

            $post->image = $image_name;
        }
        $post->save();
        $post->tags()->sync($request->tags, false);

        // redirect to another page
        return redirect()->route('posts.show', $post->id)->with('success', 'The blog post was successfully saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tagsArray = array();
        foreach ($tags as $tag) {
            $tagsArray[$tag->id] = $tag->name;
        }
// return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tagsArray);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash |min:5 |max: 255|unique:posts,slug',
            'category_id' => 'required|integer',
            'content'=> 'required',
            'image' => 'sometimes'
        ));

        // Save the data to the database
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->author_id = Auth::user()->id;

        if (!$request->image == null) {
            $data = $request->image;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= str_slug($request->title, $separator = '-').date('His').'.png';
            $path = public_path() . "/images/posts/" . $image_name;
            file_put_contents($path, $data);

            if(!$post->image == null){
                $oldFilename = $post->image;
                $filename1 = public_path().'/images/post/'.$oldFilename;
                \File::delete($filename1);
            }

            $post->image = $image_name;
        }
        $post->save();
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.show', $post->id)->with('success', 'The blog post was successfully saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $imagename = public_path().'/images/posts/'.$post->image;
        \File::delete($imagename);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'The blog post was successfully Deleted!');

    }

    public function apiCheckUnique(Request $request){
        return json_encode(!Post::where('slug', '=', $request->slug)->exists());
    }
}
