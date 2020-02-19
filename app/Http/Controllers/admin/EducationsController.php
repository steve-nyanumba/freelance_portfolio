<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;

class EducationsController extends Controller
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
        return view('admin.education.create');
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
            'institution'=>'required',
            'description'=>'required',
        ]);

        $education = new Education;
        $education->title = $request->title;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;
        $education->institution = $request->institution;
        $education->description = $request->description;
        $education->save();
        return redirect()->route('about.index')->with('SuccessMsg', 'Education Item successfully added');


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
        $education = Education::find($id);
        return view('admin.education.edit')->with('education', $education);
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
            'institution'=>'required',
            'description'=>'required',
        ]);

        $education = Education::find($id);
        $education->title = $request->title;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;
        $education->institution = $request->institution;
        $education->description = $request->description;
        $education->save();
        return redirect()->route('about.index')->with('SuccessMsg', 'Education Item successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return view('admin.about.index')->with('successMsg', 'Education Item Successfully Deleted');
    }
}
