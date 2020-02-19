<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Experience;
use App\Education;
use App\Skill;
use App\Post;
use App\Portfolio;
use App\PortCategory;
use App\PostCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $abouts = About::all();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $posts = Post::all();
        $categories = PortCategory::all();
        $post_categories = PostCategory::all();
        return view('welcome')->with('abouts', $abouts)->with('skills', $skills)->with('portfolios', $portfolios)->with('educations', $educations)->with('experiences', $experiences)->with('posts',$posts)->with('categories', $categories)->with('post_categories',$post_categories);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog')->with('post', $post);
<<<<<<< HEAD
    }

    public function reveal($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio')->with('portfolio', $portfolio);
=======
>>>>>>> eef4cb3da2cec049015cb59f1f1142cb82f1a321
    }
}
