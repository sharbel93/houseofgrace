<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Storage;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use Purifier;
use LaraFlash;
use Session;
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ));
//            'inputImage' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'


        // stroe in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->content = Purifier::clean($request->content);
        $post->author_id = Auth::user()->id;

//        if (!$request->thumbnail == null) {
//            $data = $request->thumbnail;
//            list($type, $data) = explode(';', $data);
//            list(, $data)      = explode(',', $data);
//            $data = base64_decode($data);
//
//            $image_name= str_slug($request->title, $separator = '-').date('His').'.png';
//            $path = public_path() . "/posts/images/" . $image_name;
//            file_put_contents($path, $data);
//
//            $post->image = $image_name;
//        }
        if( $request->hasFile('thumbnail') ) {
            $post_thumbnail     = $request->file('thumbnail');
            $filename           = str_slug($request->title, $separator = '-').date('His'). '.jpg';
            $location =  public_path('/posts/images/' . $filename );
            Image::make($post_thumbnail)->resize(800,400)->save($location);
//            Image::make($post_thumbnail)->widen(1200)->save($location);
//            $originalImage = Image::make($post_thumbnail);
//            $originalImage->save( $location );
//               Set post-thumbnail url
            $post->image = $filename;
        }

//           dd($post->image);
        $post->save();
        $post->tags()->sync($request->tags, false);

        // redirect to another page
        return redirect()->route('posts.show', $post->id)->with('success', 'The posts post was successfully saved!');

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
        return view('manage.posts.show')->withPost($post);
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
        return view('manage.posts.edit')->withPost($post)->withCategories($cats)->withTags($tagsArray)->with
            ('success', 'Edited successfully!');

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
//        $post = Post::find($id);
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => "required|alpha_dash |min:5 |max: 255|unique:posts,slug, $id",
            'category_id' => 'required|integer',
            'content'=> 'required',
            'thumbnail' => 'required|image'
        ));

        // Save the data to the database
//        $post->title = $request->title;
//        $post->slug = $request->slug;
//        $post->category_id = $request->category_id;
//        $post->content = Purifier::clean($request->content);
//        $post->author_id = Auth::user()->id;
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->content = Purifier::clean($request->input('content'));
        $post->author_id = Auth::user()->id;

//        if (!$request->image == null) {
//            $data = $request->image;
//            list($type, $data) = explode(';', $data);
//            list(, $data)      = explode(',', $data);
//            $data = base64_decode($data);
//
//            $image_name= str_slug($request->title, $separator = '-').date('His').'.png';
//            $path = public_path() . "/images/posts/" . $image_name;
//            file_put_contents($path, $data);
//
//            if(!$post->image == null){
//                $oldFilename = $post->image;
//                $filename1 = public_path().'/images/post/'.$oldFilename;
//                \File::delete($filename1);
//            }
        // Check if file is present
        if( $request->hasFile('thumbnail') ) {
            $post_thumbnail     = $request->file('thumbnail');
            $filename           = str_slug($request->title, $separator = '-').date('His'). '.png';
            $location =  public_path('/posts/images/' . $filename );
            Image::make($post_thumbnail)->resize(800, 400)->save( $location );
            $oldFilename = $post->image;


            // Delete the old photo
            if(!$post->image == null){
                $oldFilename = $post->image;
                $filename1 = public_path().'/posts/images/'.$oldFilename;
                \File::delete($filename1);
            }
//            Storage::delete($oldFilename);

            // update database
            $post->image = $filename;
        }
//        print_r( $post->title);
//        die();
//        dd( $request->thumbnail, $request->author_id, $request->content, $request->category_id,  $request->slug,  $request->title);
        $post->save();
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.show', $post->id)->with('success', 'The posts post was successfully saved!');
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
        return redirect()->route('posts.index')->with('success', 'The posts post was successfully Deleted!');

    }

    public function apiCheckUnique(Request $request){
        return json_encode(!Post::where('slug', '=', $request->slug)->exists());
    }
}
