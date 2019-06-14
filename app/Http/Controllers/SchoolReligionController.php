<?php

namespace App\Http\Controllers;

use App\SchoolReligion;
use Illuminate\Http\Request;

class SchoolReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('religion.index');
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
        $a = new SchoolReligion();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolReligion  $schoolReligion
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolReligion $schoolReligion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolReligion  $schoolReligion
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolReligion $schoolReligion)
    {
        return view('religion.edit',compact('schoolReligion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolReligion  $schoolReligion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolReligion $schoolReligion)
    {
        $schoolReligion->name=$request->name;
        $schoolReligion->save();
        return redirect('/admin/Religion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolReligion  $schoolReligion
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolReligion $schoolReligion)
    {
        $schoolReligion->delete();
        return back();
    }
}
