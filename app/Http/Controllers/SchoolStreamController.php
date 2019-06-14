<?php

namespace App\Http\Controllers;

use App\SchoolStream;
use Illuminate\Http\Request;

class SchoolStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stream.index');
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
        $a=new SchoolStream();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolStream  $schoolStream
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolStream $schoolStream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolStream  $schoolStream
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolStream $schoolStream)
    {
        return view('stream.edit',compact('schoolStream'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolStream  $schoolStream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolStream $schoolStream)
    {
        $schoolStream->name=$request->name;
        $schoolStream->save();
        return redirect('/admin/Stream');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolStream  $schoolStream
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolStream $schoolStream)
    {
        $schoolStream->delete();
    }
}
