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
.present,.absent,.half-day,.leave{
    cursor:pointer;
}    
</style>
<div class="col-sm-12">
<div class="page-header">
<h3>Attendance {{$date}} of class <b>{{$students[0]->class}}</b></h3>
</div>
<form method="post" action="/admin/AttendanceSubmit" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" value="{{$date}}" name="date">
    <table class="table table-condensed  table-responsive table-bordered">
        <thead>
            <tr>
                <th width="70">Rol No</th>
                <th>Name</th>
                <th width="70">Class</th>
                <th width="70">Section</th>
                <th width="100">Present</th>
                <th width="100">Absent</th>
                <th width="100">Half Day</th>
                <th width="100">Leave</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <input type="hidden" name="status[{{$student->id}}]">
                    <td>{{$student->rollno}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->section}}</td>
                    <td class="present">Present</td>
                    <td class="absent">Absent</td>
                    <td class="half-day">Half Day</td>
                    <td class="leave">Leave</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    <div class="from-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Submit Attendance</button>
    </div>
    </form>
</div>
<script>
    $('document').ready(function(){
        $('.present').on('click',function(){
            $(this).parent().removeClass().addClass('bg-success').find('input').attr('value','Present');
        });
        $('.absent').on('click',function(){
            $(this).parent().removeClass().addClass('bg-danger').find('input').attr('value','Absent');
        });
        $('.half-day').on('click',function(){
            $(this).parent().removeClass().addClass('bg-info').find('input').attr('value','Half Day');
        });
        $('.leave').on('click',function(){
            $(this).parent().removeClass().addClass('bg-warning').find('input').attr('value','Leave');
        });
    });
</script>
@endsection