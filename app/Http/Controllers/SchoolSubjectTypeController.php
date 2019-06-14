<?php

namespace App\Http\Controllers;

use App\SchoolSubjectType;
use Illuminate\Http\Request;

class SchoolSubjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subjectType.index');
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
        $a=new SchoolSubjectType();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolSubjectType  $schoolSubjectType
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSubjectType $schoolSubjectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolSubjectType  $schoolSubjectType
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSubjectType $schoolSubjectType)
    {
        return view('subjectType.edit',compact('schoolSubjectType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolSubjectType  $schoolSubjectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSubjectType $schoolSubjectType)
    {
        $schoolSubjectType->name=$request->name;
        $schoolSubjectType->save();
        return redirect('/admin/SubjectType');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolSubjectType  $schoolSubjectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSubjectType $schoolSubjectType)
    {
        $schoolSubjectType->delete();
        return back();
    }
}
