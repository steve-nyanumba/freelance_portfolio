<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;

class ExperiencesController extends Controller
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
        return view('admin.experiences.create');
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
            'title'=>'required',
            'start_year'=>'required',
            'end_year'=>'required',
            'company'=>'required',
            'description'=>'required',
        ]);

        $experiences = new Experience;
        $experiences->title = $request->title;
        $experiences->start_year = $request->start_year;
        $experiences->end_year = $request->end_year;
        $experiences->company = $request->company;
        $experiences->description = $request->description;
        $experiences->save();
        return redirect()->route('about.index')->with('SuccessMsg', 'Experiences Item successfully added');
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
        $experience = Experience::find($id);
        return view('admin.experiences.edit')->with('experience', $experience);

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
            'title'=>'required',
            'start_year'=>'required',
            'end_year'=>'required',
            'company'=>'required',
            'description'=>'required',
        ]);

        $experiences = Experience::find($id);
        $experiences->title = $request->title;
        $experiences->start_year = $request->start_year;
        $experiences->end_year = $request->end_year;
        $experiences->company = $request->company;
        $experiences->description = $request->description;
        $experiences->save();
        return redirect()->route('about.index')->with('SuccessMsg', 'Experiences Item successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('about.index')->with('successMsg', 'experience item successfully deleted.');
    }
}
