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
    <div class="row">
            <div class="page-header">
                <h3>New Student Regitration</h3>
            </div>
            <hr>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Select Gender</label>
                </div>
                <div class="col-sm-8">
                    <input type="radio" name="gender" value="male">
                    <small>Male</small>
                    <input type="radio" name="gender" value="female">
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
                    <input type="text" name="father_name" class="form-control" placeholder="Enter Father Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Enter Mother Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="mother_name" class="form-control" placeholder="Enter Mother Name">
                </div>
            </div>
        </div>
        <div class="row bg">
            <div class="col-md-6 ">
                <div class="col-sm-4">
                    <label>Enter Phone Number</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <label>Enter Email Address</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" placeholder="Enter E-mail">
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <option value="{{$item->name}}">{{$item->name}}</option>
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
                        <input type="date" name="dor" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Date Of Birth</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" name="dob" class="form-control">
                    </div>
                </div>
        </div>
        <div class="row bg">
                <div class="col-md-6 ">
                    <div class="col-sm-4">
                        <label>Roll No</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Student Roll No" name="rollno" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Permanent Address</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Permanent Address" name="address" class="form-control">
                    </div>
                </div>
        </div>
        <div class="row ">
                <div class="col-md-6 ">
                    <div class="col-sm-4">
                        <label>Father Occupation </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Father Occupation" name="father_occupation" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <label>Photo</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="file" placeholder="Permanent Address" name="photo">
                    </div>
                </div>
        </div>
        <hr>
        <div class="row">
                <div class="text-center">
                    <button type="submit" class="btn  btn-primary">Add Student</button>
                </div>
            </div>                                     
        <hr>
    </form>
</div>
@endsection