<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortCategory;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        $portcategories = PortCategory::all();
        return view('admin.portfolio.index')->with('portfolios', $portfolios)->with('portcategories', $portcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portcategories = PortCategory::all();
        return view('admin.portfolio.create')->with('portcategories', $portcategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
            'title'=> 'required',
            'category'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,bmp,png|max:1500',
            'description' => 'required'
            'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1500'
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('img/portfolio') ) {
                mkdir('img/portfolio', 0777, true);
            }

           $image->move('img/portfolio', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->category = $request->category;
        $portfolio->description = $request->description;
        $portfolio->image = $imagename;
        $portfolio->save();
        return redirect('/admin/portfolio')->with('successMsg', 'Portfolio Item Successfully Added');

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
        $portfolios = Portfolio::find($id);
        $portcategories = PortCategory::all();
        return view('admin.portfolio.index')->with('portfolios', $portfolios)->with('portcategories', $portcategories);
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
            'title'=> 'required',
            'category'=> 'required',
            'image'=> 'mimes:jpeg,jpg,bmp|max:1500',
            'description' => 'required'
            'image'=> 'mimes:jpeg,jpg,bmp|max:1500'

        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $portfolio = Portfolio::find($id);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $path = $request->file('image')->storeAs('img/portfolio', $imagename);
        }
        else{
            $imagename = $portfolio->image;
        }

        $portfolio->title = $request->title;
        $portfolio->category = $request->category;
        $portfolio->image = $imagename;
        $portfolio->description = $request->description;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('successMsg', 'Portfolio Item Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if (file_exists('img/portfolio/'.$portfolio->image))
        {
            unlink('img/portfolio/'.$portfolio->image);
        }
        $portfolio->delete();
        return redirect()->back()->with('successMsg','Item successfully Deleted');
    }
}
