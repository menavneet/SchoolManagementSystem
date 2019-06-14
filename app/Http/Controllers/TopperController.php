<?php

namespace App\Http\Controllers;

use App\Topper;
use Illuminate\Http\Request;

class TopperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topper.index');
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
        $a=new Topper();
        $a->name=$request->name;
        $a->class=$request->class;
        $a->photo=$request->photo->store('topper');
        $this->resizeImage($a->photo,200);
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function show(Topper $topper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function edit(Topper $topper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topper $topper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topper $topper)
    {
        $topper->delete();
        return back();
    }
}
