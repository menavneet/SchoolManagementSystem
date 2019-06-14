@extends('layout.print')
@section('content')
<div class="container">
        <div class="row">
<h2 class="page-header text-center">School Managment System</h2>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6"><label>Roll No: </label></div>
            <div class="col-sm-6">{{$student->rollno}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Name: </label></div>
            <div class="col-sm-6">{{$student->name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Class & Section: </label></div>
            <div class="col-sm-6">{{$student->class}}-{{$student->section}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Date Of Birth: </label></div>
            <div class="col-sm-6">{{$student->dob}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Father: </label></div>
            <div class="col-sm-6">{{$student->father_name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Mother: </label></div>
            <div class="col-sm-6">{{$student->mother_name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Phone: </label></div>
            <div class="col-sm-6">{{$student->phone}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Mail: </label></div>
            <div class="col-sm-6">{{$student->email}}</div>
        </div>
        <div class="row">
            <div class="col-sm-6"><label>Address: </label></div>
            <div class="col-sm-6">{{$student->address}}</div>
        </div>
    </div>
    <div class="col-sm-6">
        <img class="img-responsive pull-right" src="/img/{{$student->photo}}">
    </div>
</div>
</div>
@endsection