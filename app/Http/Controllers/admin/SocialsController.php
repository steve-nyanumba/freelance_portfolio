<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;

class SocialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.socials.create');
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
            $request,
            [
                'twitter'=>'required',
                'facebook'=>'required',
                'dribbble'=>'required',
                'linkedin'=>'required',
                'instagram'=>'required',
                'youtube'=>'required',
                'github'=>'required'
            ]
        );

        $social = new Social;
        $social->twitter = $request->twitter;
        $social->facebook = $request->facebook;
        $social->dribbble = $request->dribbble;
        $social->linkedin = $request->linkedin;
        $social->instagram = $request->instagram;
        $social->youtube = $request->youtube;
        $social->github = $request->github;
        $social->save();
        return redirect()->back()->with('successMsg', 'Social Media links have been added');
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
        $social = Social::find($id);
        return view('admin.socials.edit')->with('social', $social);
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
        $this->validate(
            $request,
            [
                'twitter'=>'required',
                'facebook'=>'required',
                'dribbble'=>'required',
                'linkedin'=>'required',
                'instagram'=>'required',
                'youtube'=>'required',
                'github'=>'required'
            ]
        );

        $social = Social::find($id);
        $social->twitter = $request->twitter;
        $social->facebook = $request->facebook;
        $social->dribbble = $request->dribbble;
        $social->linkedin = $request->linkedin;
        $social->instagram = $request->instagram;
        $social->youtube = $request->youtube;
        $social->github = $request->github;
        $social->save();
        return redirect()->back()->with('successMsg', 'Social Media links have been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect()->back()->with('successMsg', 'Social Media links have been deleted');
    }
}
