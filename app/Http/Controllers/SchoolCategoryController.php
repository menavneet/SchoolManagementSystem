<?php

namespace App\Http\Controllers;

use App\SchoolCategory;
use Illuminate\Http\Request;

class SchoolCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
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
        $a=new SchoolCategory();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolCategory  $schoolCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolCategory $schoolCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolCategory  $schoolCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolCategory $schoolCategory)
    {
        return view('category.edit',compact('schoolCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolCategory  $schoolCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolCategory $schoolCategory)
    {
        $schoolCategory->name=$request->name;
        $schoolCategory->save();
        return redirect('/admin/Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolCategory  $schoolCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolCategory $schoolCategory)
    {
        $schoolCategory->delete();
        return back();
    }
}
