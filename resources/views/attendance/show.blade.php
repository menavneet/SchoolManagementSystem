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
    <div class="page-header">
            <h3>Attendance</h3>
        </div> 
    {{ csrf_field() }}
    <div class="form-group">
        <label> Select Session</label>
        <select name="session" required class="form-control" required>
            <option disabled selected value>--Select Session--</option>
            @foreach (App\SchoolSession::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Class</label>
        <select name="class" required class="form-control" required>
            <option disabled selected value>--Select Class--</option>
            @foreach (App\SchoolClass::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Section</label>
        <select name="section"  class="form-control" required>
            <option disabled selected value>--Select section--</option>
            @foreach (App\SchoolSection::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Date</label>
    <input type="text" name="date" class="form-control" value="{{date('d/m/y')}}">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-calendar-o" aria-hidden="true"></i> Take Attendance</button>
    </div>
    </form>
</div>
@endsection