<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\PostCategory;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PostCategory::all();
        $posts = Post::all();
        return view('admin\blog\index')->with('categories', $categories)->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::all;
        return view('admin.blog.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category'=>'required',
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,bmp|max:1500',
            'content'=>'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $path = $request->file('image')->storeAs('public/menus',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $post = new Post();
        $post->category = $request->category;
        $post->title = $request->title;
        $post->image = $request->imagename;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.index')->with('successMsg', 'Blog Post Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.blog.edit')->with('menu',$menu)->with('categories', $categories);
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
        $this->validate($request, [
            'category'=>'required',
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,bmp|max:1500',
            'content'=>'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $post = Post::find($id);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $path = $request->file('image')->storeAs('public/menus', $imagename);
        } else {
            $imagename = 'default.png';
        }

        $post->category = $request->category;
        $post->title = $request->title;
        $post->image = $request->imagename;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.index')->with('successMsg', 'Blog Post Successfully Updated');
    }

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

        if(file_exists('storage/menus/' . $post->image)) {
            unlink('storage/menus/' . $post->image);
        }
        $post->delete();
        return redirect()->back()->with('successMsg', 'Blog Post successfully deleted');
    }
}
