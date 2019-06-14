<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function test(Request $request){
        return $request;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function get_name(Request $request){
        //return $request;
        $student=Student::where('session',$request->session)->where('class',$request->class)->where('section',$request->section)->get(['id','name','rollno']);
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() //Student Registration
    {
        return view('student.create');
    }

    public function report(){
        return view('student.report');
    }

    public function re_registration(){
        return view('student.re_registration');
    }

    public function identity_card(){
        return view('student.identitycard');
    }

    public function find_identity_card(Request $request){
        $students= Student::where('session',$request->session)->where('class',$request->class);
        if($request->section){
            $students->where('section',$request->section);
        }
        if($request->stream){
            $students->where('stream',$request->stream);
        }
        if($request->gender){
            $students->where('gender',$request->stream);
        }
        if($request->fromdate && $request->todate){
            $students->whereBetween('dor',[$request->fromdate,$request->todate]);
        }
        $students=$students->get();
        return view('student.print_identitycard',compact('students'));
        return $students;
    }


    public function re_registration_find(Request $request){
        $students= Student::where('session',$request->session)->where('class',$request->class);
        if($request->section){
            $students->where('section',$request->section);
        }
        if($request->stream){
            $students->where('stream',$request->stream);
        }
        $students=$students->get();
        return view('student.re_registration_form',compact('students'));
    }

    public function re_registration_submit(Request $request){
        foreach($request->checkbox as $id){
            $a=Student::find($id);
            $a->session=$request->session;
            $a->class=$request->class;
            $a->status=$request->status[$id];
            if($request->stream){
                $a->stream=$request->stream;
            }
            if($request->section){
                $a->section=$request->section;
            }
            if($request->rollno[$id]){
                $a->rollno=$request->rollno[$id];
            }
            $a->dor=$request->dor;
            $a->save();
        }
       
        return $request;
    }


    public function find_report(Request $request)
    {
        $students= Student::where('session',$request->session)->where('class',$request->class);
        if($request->section){
            $students->where('section',$request->section);
        }
        if($request->stream){
            $students->where('stream',$request->stream);
        }
        if($request->gender){
            $students->where('gender',$request->stream);
        }
        if($request->fromdate && $request->todate){
            $students->whereBetween('dor',[$request->fromdate,$request->todate]);
        }
        $students=$students->get();
        return view('student.viewreport',compact('students'));
    }

    public function search_detail(){
        return view('student.detail');
    }


    public function find_detail(Request $request){
        // return Student::all();
        $students= Student::where('session',$request->session)->where('class',$request->class);
        if($request->section){
            $students->where('section',$request->section);
        }
        if($request->stream){
            $students->where('stream',$request->stream);
        }
        $students=$students->get();
        return view('student.index',compact('students'));
    }

    public function print_detail(Student $student){
        return view('student.print_detail',compact('student') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $a=new Student();
        $a->name=ucfirst($request->name);
        $a->session=$request->session;
        $a->class=$request->class;
        $a->section=$request->section;
        $a->stream=$request->stream;
        $a->gender=$request->gender;
        $a->father_name=ucfirst($request->father_name);
        $a->mother_name=ucfirst($request->mother_name);
        $a->phone=$request->phone;
        $a->email=$request->email;
        $a->religion=$request->religion;
        $a->category=$request->category;
        $a->state=$request->state;
        $a->city=$request->city;
        $a->dor=$request->dor;
        $a->dob=$request->dob;
        $a->rollno=$request->rollno;
        $a->address=$request->address;
        $a->father_occupation=ucfirst($request->father_occupation);
        $a->photo=$request->photo->store('student');
        $a->status='Admission';
        $this->resizeImage($a->photo,200);
        $a->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name=ucfirst($request->name);
        $student->session=$request->session;
        $student->class=$request->class;
        $student->section=$request->section;
        $student->stream=$request->stream;
        $student->gender=$request->gender;
        $student->father_name=ucfirst($request->father_name);
        $student->mother_name=ucfirst($request->mother_name);
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->religion=$request->religion;
        $student->category=$request->category;
        $student->state=$request->state;
        $student->city=$request->city;
        $student->dor=$request->dor;
        $student->dob=$request->dob;
        $student->rollno=$request->rollno;
        $student->address=$request->address;
        $student->father_occupation=ucfirst($request->father_occupation);
        if($request->photo){
            $student->photo=$request->photo->store('student');
            $this->resizeImage($student->photo,200);
        }
        $student->save();
        return redirect('/admin/StudentRegistration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
