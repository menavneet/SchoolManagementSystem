@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <form method="post">
            {{ csrf_field() }}
        <div class="block-fluid">
            <div class="form-group" style="border-top: 0px none;">
                <div ><div class="page-header">
            <h1>Attendance Detail Report</h1>
        </div><strong>Select Session</strong></div>
                <div >
                    <select name="session" class="form-control" required>
                        <option disabled selected value>--Select Session--</option>
                    @foreach (App\SchoolSession::all() as $item)
                        <option value="{{$item->name}}"> {{$item->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div ><strong>Class Name</strong></div>
                <div >
                    <select name="class" class="form-control" required>
                            <option disabled selected value>--Select Class--</option>
                    @foreach (App\SchoolClass::all() as $item)
                        <option value="{{$item->name}}"> {{$item->name}}</option>
                    @endforeach
                   </select>
            </div>
            </div>
            <div class="form-group">
                <div ><strong>Section Name</strong></div>
                <div >
                    <select name="section"  class="form-control" required>
                            <option disabled selected value>--Select Section--</option>
                        @foreach (App\SchoolSection::all() as $item)
                            <option value="{{$item->name}}"> {{$item->name}}</option>
                        @endforeach
                    </select></div>
            </div>
            <div class="form-group">
                <div><strong>Stream Name</strong></div>
                <div>
                    <select name="stream" class="form-control" required>
                            <option disabled selected value>--Select Stream--</option>
                        @foreach (App\SchoolStream::all() as $item)
                            <option value="{{$item->name}}"> {{$item->name}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="form-group">
                    <div ><strong>Roll No.</strong></div>
                    <div>
                        <input type="text" name="rollno" class="form-control" placeholder="Enter Roll Number" required>
                    </div>
            </div>
            <div class="form-group">
                <div ><strong>From Date</strong></div>
                <div ><input name="date_from" placeholder="From Date" class="form-control"  type="date" required ></div>
            </div>
            <div class="form-group" >
                <div ><strong>To Date</strong></div>
                <div ><input name="date_to" placeholder="To Date" value="" class="form-control"  type="date" required></div>
            </div>						
            <div class="footer tar">
                <button type="submit" name="button" id="button" class="btn btn-primary">Search</button>												
            </div>
        </div>
    </form>
    </div>
</div>
@endsection