<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Portfolio;
use App\Contact;
use App\Testimonial;
use App\Social;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $portfolios = Portfolio::all();
        $contacts = Contact::all();
        $testimonials = Testimonial::all();
        $socials = Social::all();
        return view('admin.dashboard')->with('posts', $posts)->with('portfolios', $portfolios)->with('contacts', $contacts)->with('testimonials', $testimonials)->with('socials', $socials);
    }
}
