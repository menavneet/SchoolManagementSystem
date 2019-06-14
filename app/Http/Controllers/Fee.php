<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee as MFee;
use App\Feemap as MFeemap;

class Fee extends Controller
{
    public function master(){
        return view('fee.master');
    }
    public function master_add(Request $request){
        $a=new MFee();
        $a->name=$request->name;
        $a->save();
        return back();
    }

    public function master_remove(MFee $fee){
        $fee->delete();
        return back();
    }
    public function setting(){
        return view('fee.setting');
    }
    public function mapping(){
        return view('fee.mapping');
    }
    public function mapping_add(Request $request){
        //return $request;
        $a=new MFeemap();
        $a->session=$request->session;
        $a->class=$request->class;
        $a->mode=$request->mode;
        $a->duration=$request->duration;
        $a->fee=$request->fee;
        $a->amount=$request->amount;
        $a->save();
        return back();

    }
    public function mapping_remove(MFeemap $feemap){
        $feemap->delete();
        return back();
    }
    public function reciep(){
        return view('fee.reciep');
    }
    public function paid_report(){
        return view('fee.paid_report');
    }
    public function unpaid_report(){
        return view('fee.unpaid_report');
    }
}
