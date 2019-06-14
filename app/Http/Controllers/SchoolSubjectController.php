<?php

namespace App\Http\Controllers;

use App\SchoolSubject;
use App\SchoolSubjectType;

use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subject.index');
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
        $a=new SchoolSubject();
        $a->name=$request->name;
        $a->subject_type=SchoolSubjectType::find($request->subject_type_id)->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSubject $schoolSubject)
    {
        //
    }
}
