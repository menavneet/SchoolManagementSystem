<?php

namespace App\Http\Controllers;

use App\SchoolSession;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;

class SchoolSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('session.index');
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
        $a=new SchoolSession();
        $a->name=$request->name;
        $a->start_date=$request->start_date;
        $a->end_date=$request->end_date;
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolSession  $schoolSession
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSession $schoolSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolSession  $schoolSession
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSession $schoolSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolSession  $schoolSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSession $schoolSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolSession  $schoolSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSession $schoolSession)
    {
        $schoolSession->delete();
        return back();
    }
}
