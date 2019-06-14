<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Attendance;
use App\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $students= Student::where('session',$request->session)->where('class',$request->class)->where('section',$request->section)->orderBy('rollno')->get();
        $date=$request->date;
        return view('attendance.index',compact(['students','date']));
    }

    public function submit(Request $request){
        foreach($request->status as $id=>$status){
            $a=new Attendance();
            $a->date=$request->date;
            $a->student_id=$id;
            $a->status=$status;
            $a->save();
        }
        return redirect('/admin/Attendance');
    }

    public function sms(){
        return view('attendance.sms');
    }

    public function detail_report(){
        return view('attendance.detail_report');
    }
    public function detail_report_show(Request $request){
       // return $request;
        $students= DB::table('students')->where('session',$request->session)->where('class',$request->class)->where('section',$request->section)->where('rollno',$request->rollno)->get();
        $attendance=DB::table('attendances')->where('student_id','=',$students[0]->id)->whereBetween('date',[$request->date_from,$request->date_to])->get();
        return view('attendance.detail_report_show',compact('attendance'));
    }

    public function report(){
        return view('attendance.report');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        return view('attendance.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
