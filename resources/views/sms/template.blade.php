@extends('layout.admin')
@section('content')
<div>
    <form method="post" >
        <h2>Add New Template</h2>
    {{ csrf_field() }}
    <div class="form-group">
        <label>SMS Name</label>
        <input  name="name" class="form-control" placeholder="Enter SMS Name" required>
    </div>    
    <div class="form-group">
        <label>SMS Type</label>
        <input name="type" class="form-control" placeholder="Enter SMS Type" required>
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea name="message" id='msg' class="form-control" rows="5" required></textarea>
    </div>
    <div class="form-group">
        <button type="button" id="std_name">Student Name</button>
        <button type="button" id="enroll_no">Enrollment No.</button>
        <button type="button" id="emp_no">Employee Name</button>
        <button type="button" id="emp_code">Employee Code</button>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">ADD Template</button>
    </div>
    </form>
    <script>
    $(document).ready(function(){
        $('#std_name').click(function(){
            $('#msg').append(' $student_name ');
        });
        $('#enroll_no').click(function(){
            $('#msg').append(' $enrollment_no ');
        });
        $('#emp_no').click(function(){
            $('#msg').append(' $employee_name ');
        });
        $('#emp_code').click(function(){
            $('#msg').append(' $employee_code ');
        });
    });
    </script>
</div>
<div>
    <table class="table table-condensed table-responsive table-hover table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>SMS Name</th>
                <th>SMS TYPE</th>
                <th>MESSAGE</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Smstemp::all() as $sms)
            <tr>
                <td>{{$sms->id}}</td>
                <td>{{$sms->name}}</td>
                <td>{{$sms->type}}</td>
                <td>{{$sms->message}}</td>
                <td>
                    <form class="inline" method="post" action="/admin/SMStemplate/{{$sms->id}}">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> delete</button>
                    </form>
                 </td>
            </tr>
                    
                    @endforeach
                </tbody>
            </table>
            
        </div>

@endsection