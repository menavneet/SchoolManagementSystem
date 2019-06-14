<?php

namespace App\Http\Controllers;

use App\SchoolCity;
use Illuminate\Http\Request;

class SchoolCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('city.index');
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
        $a=new SchoolCity();
        $a->school_state_id=$request->school_state_id;
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolCity  $schoolCity
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolCity $schoolCity)
    {           
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolCity  $schoolCity
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolCity $schoolCity)
    {
        return view('city.edit',compact('schoolCity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolCity  $schoolCity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolCity $schoolCity)
    {
        $schoolCity->name=$request->name;
        $schoolCity->save();
        return redirect('/admin/City');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolCity  $schoolCity
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolCity $schoolCity)
    {
        $schoolCity->delete();
        return back();
    }
}
