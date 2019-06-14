@extends('layout.admin')
@section('content')
<div class="span12">
    <div class="page-header">
        <h1>Student Attendance Report</h1>
    </div>
    <div class="block-fluid">

        <div class="form-group">
            <divsssssssss><strong>Select Session</strong></div>
            <div>
                <select name="session"  class="form-control">
                        <option disabled selected value>--Select Session--</option>
                        @foreach (App\SchoolSession::all() as $item)
                            <option value="{{$item->name}}"> {{$item->name}}</option>
                        @endforeach
                </select></div>
        </div>
        <div class="form-group">
            <div ><strong>Class Name</strong></div>
            <div ><select name="class_id" id="class_id" class="form-control">
                    <option disabled selected value>--Select Class--</option>
                    @foreach (App\SchoolClass::all() as $item)
                        <option value="{{$item->name}}"> {{$item->name}}</option>
                    @endforeach
            </select></div>
        </div>
        <div class="form-group">
            <div ><strong>Section Name</strong></div>
            <div ><select name="section" class="form-control">
                    <option disabled selected value>--Select Section--</option>
                    @foreach (App\SchoolSection::all() as $item)
                        <option value="{{$item->name}}"> {{$item->name}}</option>
                    @endforeach
            </select>
        </div>
        </div>
        <div class="form-group">
            <div ><strong>Stream Name</strong></div>
            <div >
                <select name="stream" class="form-control">
                        <option disabled selected value>--Select Stream--</option>
                        @foreach (App\SchoolStream::all() as $item)
                            <option value="{{$item->name}}"> {{$item->name}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div ><strong>From Date</strong></div>
            <div ><input name="date_from"  placeholder="From Date"  class="form-control" type="date"></div>
        </div>
        <div class="form-group">
            <div ><strong>To Date</strong></div>
            <div ><input name="date_to" placeholder="To Date" class="form-control" type="date"></div>
        </div>
        <div class="form-group">
            <button type="submit" name="button" id="button" class="btn btn-primary">Search</button>													
        </div>
    </div>
</div>
@endsection