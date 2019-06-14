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
    <div class="page-header">
        <h3>Print Identity Card</h3>
    </div> 
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label> Select Session</label>
        <select name="session" required class="form-control">
            <option disabled selected value>--Select Session--</option>
            @foreach (App\SchoolSession::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Class</label>
        <select name="class" required class="form-control">
            <option disabled selected value>--Select Class--</option>
            @foreach (App\SchoolClass::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Section <small>(optional)</small></label>
        <select name="section"  class="form-control">
            <option disabled selected value>--Select section--</option>
            @foreach (App\SchoolSection::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Stream <small>(optional)</small></label>
        <select name="steam"  class="form-control">
            <option disabled selected value>--Select Steam--</option>
            @foreach (App\SchoolStream::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Gender <small>(optional)</small></label>
        <br>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
    </div>
    <div class="form-group">
        <label> From Date (Registration) <small>(optional)</small></label>
        <input type="date" name="fromdate" placeholder="From Date" class="form-control">
    </div>
    <div class="form-group">
        <label> To Date (Registration) <small>(optional)</small></label>
        <input type="date" name="todate" placeholder="To Date" class="form-control">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-id-card-o" aria-hidden="true"></i> Print Identity Card</button>
    </div>
    </form>
</div>
@endsection