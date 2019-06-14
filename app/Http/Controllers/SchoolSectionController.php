<?php

namespace App\Http\Controllers;

use App\SchoolSection;
use Illuminate\Http\Request;

class SchoolSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('_section.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a=new SchoolSection();
        $a->name=$request->name;
        $a->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolSection  $schoolSection
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSection $schoolSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolSection  $schoolSection
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSection $schoolSection)
    {
        return view('_section.edit',compact('schoolSection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolSection  $schoolSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSection $schoolSection)
    {
        $schoolSection->name=$request->name;
        $schoolSection->save();
        return redirect('/admin/_Section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolSection  $schoolSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSection $schoolSection)
    {
        $schoolSection->delete();
        return back();
    }
}
