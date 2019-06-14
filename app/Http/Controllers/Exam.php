<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Student;
use App\Mark;
use App\Exam as MExam;
use App\Markmaster;
class Exam extends Controller
{
    public function master(){
        return view('exam.master');
    }
    public function master_add(Request $request){
        $a=new MExam();
        $a->name=$request->name;
        $a->save();
        return back();
    }
    public function master_remove(MExam $exam){
        $exam->delete();
        return back();
    }
    public function marks_master(){
        return view('exam.marks_master');
    }

    public function marks_master_add(Request $request){
        $a=new Markmaster();
        $a->session=$request->session;
        $a->class=$request->class;
        $a->stream=$request->stream;
        $a->exam=$request->exam;
        $a->subject=$request->subject;
        $a->mmth=$request->mmth;
        $a->pmth=$request->pmth;
        $a->mmpr=$request->mmpr;
        $a->pmpr=$request->pmpr;
        $a->save();
        return back();
    }
    public function marks_master_remove(MarkMaster $mm){
        $mm->delete();
        return back();
    }

    public function marks_entry(){
        return view('exam.marks_entry');
    }

    public function marks_entry_search(Request $request){
        $exam=$request->exam;
        $session=$request->session;
        $subject=$request->subject;
        $class=$request->class;
        $students = Student::where('session',$request->session)->where('class',$request->class)->where('stream',$request->stream)->orderBy('rollno')->get();
        return view('exam.marks_entry',compact(['session','exam','subject','students','class']));
    }

    public function marks_store(Request $request){
        foreach($request->student as $id){
            $a=new Mark();
            $a->session=$request->session;
            $a->subject=$request->subject;
            $a->exam=$request->exam;
            $a->class=$request->class;
            $a->student_id=$id;
            $a->marks_th=$request->theory[$id];
            $a->marks_pr=$request->prac[$id];
            $a->save();
        }
        return back();
    }

    public function grade_master(){
        return view('exam.grade_master');
    }
    public function grade_master_add(Request $request){
        $a=new Grade();
        $a->name=ucfirst($request->name);
        $a->maxm=$request->maxm;
        $a->minm=$request->minm;
        $a->save();
        return back();
    }
    public function grade_master_remove(Grade $grade){
        $grade->delete();
        return back();
    }
    public function report_card(){
        return view('exam.report_card');
    }
    public function report(){
        return view('exam.report');
    }
}

