<?php

namespace App\Http\Controllers;

use App\SchoolState;
use Illuminate\Http\Request;

class SchoolStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('state.index');
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
        $a = new SchoolState();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolState  $schoolState
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolState $schoolState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolState  $schoolState
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolState $schoolState)
    {
        return view('state.edit',compact('schoolState'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolState  $schoolState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolState $schoolState)
    {
        $schoolState->name=$request->name;
        $schoolState->save();
        return redirect('/admin/State');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolState  $schoolState
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolState $schoolState)
    {
        $schoolState->delete();
        return back();
    }
}
