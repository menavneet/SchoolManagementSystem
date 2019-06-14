<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smstemp;
use App\Student;
use App\Sms as MSms;

class SMS extends Controller
{
    public function template(){
        return view('sms.template');
    }
    public function template_store(Request $request){
        $a=new Smstemp();
        $a->name=$request->name;
        $a->type=$request->type;
        $a->message=$request->message;
        $a->save();
        return back();
    }

    public function template_delete(Smstemp $smstemp){
        $smstemp->delete();
        return back();
    }

    public function student_sms_add(Request $request){
       // return $request;
        $student=Student::select(['id','phone'])->whereIn('id',$request->students)->get();
        foreach($student as $std){
            $a=new MSms();
            $a->phone=$std->phone;
            $a->msg=$request->message;
            $a->status="in";
            $a->save();
        }
        return back();
    }

    public function student(){
        return view('sms.student');
    }
    public function staff(){
        return view('sms.staff');
    }
    public function birthday(){
        return view('sms.birthday');
    }
    public function other(){
        return view('sms.other');
    }
    public function show(){
        return view('sms.show');
    }
    public function send(){
        return '<h1>Queued Sms Send<h1>';
    }
    public function student_report(){
        return view('sms.student_report');
    }
    public function staff_report(){
        return view('sms.staff_report');
    }
    public function other_report(){
        return view('sms.other_report');
    }
}
