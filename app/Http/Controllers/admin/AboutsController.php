<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Education;
use App\Skill;
use App\Experience;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $about = About::all();
        return view('admin.about.index')->with('about', $about)->with('skills', $skills)->with('educations', $educations)->with('experiences', $experiences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate
        ($request, [
            'name'=>'required',
            'video'=>'required',
            'cv'=>'required|mimes:docx,pdf,txt,docxml,eml|max:1000',
            'country'=>'required',
            'city'=>'required',
            'image'=>'mimes:jpeg,jpg,bmp|max:1500',
            'description'=>'required',
        ]);
        $image = $request->file('image');
        $cv = $request->file('cv');
        $slug = Str::slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('img/about') ) {
                mkdir('img/about', 0777, true);
            }

           $image->move('img/about', $imagename);
        }else{
            $imagename = 'default.png';
        }
        if(isset($cv)){
            $cdate = Carbon::now()->toDateString();
            $cvname = $slug.'-'.$cdate.'-'.uniqid().'.'.$cv->getClientOriginalExtension();
            if (!file_exists('docs/about') ) {
                mkdir('docs/about', 0777, true);
            }

           $cv->move('docs/about', $cvname);
        }else{
            $cvname = 'default.pdf';
        }

        $about = new About();
        $about->name = $request->name;
        $about->country = $request->country;
        $about->image = $imagename;
        $about->video = $request->video;
        $about->cv = $cvname;
        $about->city = $request->city;
        $about->description = $request->description;
        $about->save();
        return redirect('/admin/about')->with('successMsg', 'Profile Successfully Added');
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
        $about = About::find($id);
        return view('admin.about.edit')->with('about', $about);
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
        $this->validate
        ($request, [
            'name'=>'required',
            'video'=>'required',
            'cv'=>'mimes:docx,pdf,txt,docxml,eml|max:1000',
            'country'=>'required',
            'city'=>'required',
            'image'=>'mimes:jpeg,jpg,bmp|max:1500',
            'description'=>'required',
        ]);
        $about = About::find($id);
        $image = $request->file('image');
        $cv = $request->file('cv');
        $slug = Str::slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('img/about') ) {
                mkdir('img/about', 0777, true);
            }

           $image->move('img/about', $imagename);
        }else{
            $imagename = 'default.png';
        }
        if(isset($cv)){
            $cdate = Carbon::now()->toDateString();
            $cvname = $slug.'-'.$cdate.'-'.uniqid().'.'.$cv->getClientOriginalExtension();
            if (!file_exists('docs/about') ) {
                mkdir('docs/about', 0777, true);
            }

           $cv->move('docs/about', $cvname);
        }else{
            $cvname = $about->cv;
        }



        $about->name = $request->name;
        $about->country = $request->country;
        $about->image = $imagename;
        $about->video = $request->video;
        $about->cv = $cvname;
        $about->city = $request->city;
        $about->description = $request->description;
        $about->save();
        return redirect('/admin/about')->with('successMsg', 'Profile Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
