@extends('layout.print')
    @section('content')
    <div class="container-fluid">
            <div class="row">
    @foreach ($students as $student)
    <div style="max-width:500px;margin:auto">
        <div style="border:solid 1px #ddd;border-radius:3px;margin:8px">
            <h2 class="page-header text-center">School Managment System</h2>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4"><label>Roll No: </label></div>
                    <div class="col-sm-8">{{$student->rollno}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Name: </label></div>
                    <div class="col-sm-8">{{$student->name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Class: </label></div>
                    <div class="col-sm-8">{{$student->class}}-{{$student->section}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>DOB: </label></div>
                    <div class="col-sm-8">{{$student->dob}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Father: </label></div>
                    <div class="col-sm-8">{{$student->father_name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Mother: </label></div>
                    <div class="col-sm-8">{{$student->mother_name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Phone: </label></div>
                    <div class="col-sm-8">{{$student->phone}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Mail: </label></div>
                    <div class="col-sm-8">{{$student->email}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><label>Address: </label></div>
                    <div class="col-sm-8">{{$student->address}}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive pull-right" src="/img/{{$student->photo}}">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
        @endforeach
</div>
</div>
@endsection