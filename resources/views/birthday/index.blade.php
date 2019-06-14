@extends('layout.admin')
@section('content')

    <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header">
        <h3>Birthday</h3>
    </div>
    <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Select Type</label>
        <select name="type" class="form-control">
            <option value="0">Student</option>
            <option value="1">Teacher/Staff</option>
        </select>
        </div>
        <div class="form-group">
            <label>Enter Name</label>
            <input class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Enter Date Of Birth </label><br>
            <input type="date" name="dob" class="from-control">
        </div>
        <div class="form-group">
            <label>Add Photo</label>
            <input type="file" name="photo">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Add Birthday</button>
        </div>
    </form> 
<div>
    <table class="table table-condensed table-responsive table-hover table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>DOB</th>
                <th>Type</th>
                <th >Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Birthday::all() as $birthday)
            <tr>
                <td><img src="/img/{{$birthday->photo}}"></td>
                <td>{{$birthday->name}}</td>
                <td>{{$birthday->dob}}</td>
                @if ($birthday->type==0)
                <td>Student</td>
                @else
                <td>Teacher/Staff</td>
                @endif
                <td>
                    <form class="inline"  method="post" action="/admin/Birthday/{{$birthday->id}}">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
</div>     
@endsection