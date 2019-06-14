@extends('layout.admin')
@section('content')
<style>
    .tab{
        margin:6px;
        padding-top:25px; 
        padding-bottom:15px; 
        cursor:pointer;
        transition: background-color 200ms;
        border:solid 1px #ddd;
        border-radius: 3px;
    }
    .tab:hover{
        background-color:#22a2cc;
        color: white;
    }
</style>
<div class="page-header">
<h1>Admin Dashboard</h1>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-graduation-cap fa-5x"></i>
        <h3>

            Student
        </h3>
    </div>
</div>
<div class="col-sm-4">

    <div class="text-center tab"> 
        <i class="fa fa-users fa-5x"></i>
        <h3>

            Employee
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-envelope-o fa-5x" aria-hidden="true"></i>
        <h3>

            SMS
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-rupee fa-5x" aria-hidden="true"></i>
        <h3>

            Fee
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-bus  fa-5x "></i>
        <h3>

            Vehcile
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-bed fa-5x "></i>
        <h3>

            Room
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
        <h3>

            Library
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
        <h3>

            Examination
        </h3>
    </div>
</div>
<div class="col-sm-4">
    <div class="text-center tab"> 
        <i class="fa fa-calendar-o fa-5x" aria-hidden="true"></i>
        <h3>

            Time Table
        </h3>
    </div>
</div>
@endsection