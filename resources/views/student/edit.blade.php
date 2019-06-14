@extends('layout.admin')
@section('content')
<style>
    .row{
        padding-top:10px;
        padding-bottom:10px;
    }
    .bg{
        background-color:#f2f2f2;
    }
</style>
<div class="col-sm-12">
<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="row">
        <div class="page-header">
            <h3>Edit Student Record</h3>
        </div> 
        </div>
        <div class="row bg">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Select Session</label>
                </div>
                <div class="col-sm-8">
                    <select name="session" class="form-control">
                        <option disabled selected value>--Select Session--</option>
                        @foreach (App\SchoolSession::all() as $item)
                        <option value="{{$item->name}}"
                        @if ($item->name==$student->session)
                            selected="selected"
                        @endif    
                        >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select Class</label>
                </div>
                <div class="col-sm-8">
                    <select name="class" class="form-control">
                        <option disabled selected value>--Select Class--</option>
                        @foreach (App\SchoolClass::all() as $item)
                        <option value="{{$item->name}}"
                        @if ($item->name==$student->class)
                        selected="selected"
                        @endif    
                        >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Select Section</label>
                </div>
                <div class="col-sm-8">
                    <select name="section" class="form-control">
                        <option disabled selected value>--Select Section--</option>
                        @foreach (App\SchoolSection::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->section)
                                selected="selected"
                                @endif    
                        >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select Stream</label>
                </div>
                <div class="col-sm-8">
                    <select name="stream" class="form-control">
                        <option disabled selected value>--Select Stream--</option>
                        @foreach (App\SchoolStream::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->stream)
                                selected="selected"
                                @endif    
                                >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row bg">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Enter Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$student->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select Gender</label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="gender" value="male" 
                    @if ($student->gender=="male")
                        checked="checked"
                    @endif>
                    <small>Male</small>
                    <input type="radio" name="gender" value="female"
                    @if ($student->gender=="male")
                    checked="checked"
                    @endif>
                    <small>Female</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Enter Father Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="father_name" class="form-control" placeholder="Enter Father Name" value="{{$student->father_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Enter Mother Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="mother_name" class="form-control" placeholder="Enter Mother Name" value="{{$student->mother_name}}">
                </div>
            </div>
        </div>
        <div class="row bg">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Enter Phone Number</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="{{$student->phone}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Enter Email Address</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" placeholder="Enter E-mail" value="{{$student->email}}">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Select Religion</label>
                </div>
                <div class="col-sm-8">
                    <select name="religion" class="form-control">
                        <option disabled selected value>--Select Religion--</option>
                        @foreach (App\SchoolReligion::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->religion)
                                selected="selected"
                                @endif  
                            >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select Category</label>
                </div>
                <div class="col-sm-8">
                    <select name="category" class="form-control">
                        <option disabled selected value>--Select Category--</option>
                        @foreach (App\SchoolCategory::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->category)
                                selected="selected"
                                @endif  >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row bg">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Select State</label>
                </div>
                <div class="col-sm-8">
                    <select name="state" class="form-control">
                        <option disabled selected value>--Select State--</option>
                        @foreach (App\SchoolState::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->state)
                                selected="selected"
                                @endif  
                                >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select City</label>
                </div>
                <div class="col-sm-8">
                    <select name="city" class="form-control">
                        <option disabled selected value>--Select City--</option>
                        @foreach (App\SchoolCity::all() as $item)
                        <option value="{{$item->name}}"
                                @if ($item->name==$student->city)
                                selected="selected"
                                @endif  
                                >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6 ">
                    <div class="col-sm-4">
                        <label>Date of Registration</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" name="dor" class="form-control" value="{{$student->dor}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Date Of Birth</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" name="dob" class="form-control" value="{{$student->dob}}">
                    </div>
                </div>
        </div>
        <div class="row bg">
                <div class="col-md-6 ">
                    <div class="col-sm-4">
                        <label>Roll No</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Student Roll No" name="rollno" class="form-control" value="{{$student->rollno}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Permanent Address</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Permanent Address" name="address" class="form-control" value="{{$student->address}}">
                    </div>
                </div>
        </div>
        <div class="row ">
                <div class="col-md-6 ">
                    <div class="col-sm-4">
                        <label>Father Occupation </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Father Occupation" name="father_occupation" class="form-control" value="{{$student->father_occupation}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Photo</label>
                    </div>
                    <div class="col-sm-8">
                        <img src="/img/{{$student->photo}}">
                        <input type="file" placeholder="Permanent Address" name="photo">
                    </div>
                </div>
        </div>
        <hr>
        <div class="row">
                <div class="text-center">
                    <button type="submit" class="btn  btn-primary">Change Detail Student</button>
                </div>
            </div>                                     
        <hr>
    </form>
</div>
@endsection