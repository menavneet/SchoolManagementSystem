<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use App\Section;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.index');
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
        $request->title=ucwords($request->title);
        $p=new Page();
        $p->content="Coming Soon ...";
        $p->save();
        if($request->menu_id=="non"){
            $a=new Menu();
            $a->title=$request->title;
            $a->page_id=$p->id;
            $a->save();
        }else{
            $a=new Section();
            $a->title=$request->title;
            $a->page_id=$p->id;
            $a->menu_id=$request->menu_id;
            $a->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->title=$request->title;
        $menu->save();
        return redirect('/admin/Menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return back();
    }
}
