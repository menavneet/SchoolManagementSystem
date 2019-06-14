<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('download.index');
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
        $a=new Download();
        $a->title=$request->title;
        $a->file=$request->file->store('download');
        $a->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('download.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        $download->delete();
        return back();
    }

    public function getfile(Download $download){
        return response()->download(storage_path('app/').$download->file);
    }
}
