@extends('layout.admin')
@section('content')
<h1>Marks Master</h1>
<div class="row">
<form method="post" class="col-sm-offset-1 col-sm-10">
    {{ csrf_field() }}
    <div class="form-group">
        <label> Select Session :</label>
        <select name="session" class="form-control">
            <option selected disabled >Select Session</option>
            @foreach (App\SchoolSession::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Select Class :</label>
        <select name="class" class="form-control">
            <option selected disabled>Select Class</option>
            @foreach (App\SchoolClass::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Select Stream :</label>
        <select name='stream' class="form-control">
            <option selected disabled>Select Stream</option>
            @foreach (App\SchoolStream::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Exam :</label>
        <select name="exam" class="form-control">
            <option selected disabled>Select Exam</option>
            @foreach (App\Exam::all() as $item)
                <option value={{$item->name}}>{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Subject :</label>
        <select name="subject" class="form-control">
            <option selected disabled>Select Subject</option>
            @foreach (App\SchoolSubject::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-6">
        <label>Max Marks in Theory :</label>
        <input type="number" name="mmth" class="form-control" placeholder="Max Marks in Theory">
    </div>
    <div class="form-group col-sm-6">
        <label>Passing Marks in Theory :</label>
        <input type="number" name="pmth" class="form-control" placeholder="Passing Marks in Theory">
    </div>
    <div class="form-group col-sm-6">
        <label>Max Marks in Practical :</label>
        <input type="number" name="mmpr" class="form-control" placeholder="Max Marks in Practical">
    </div>
    <div class="form-group col-sm-6">
        <label>Passing Marks in Prctical :</label>
        <input type="number" name="pmpr" class="form-control" placeholder="Passing Marks In Practical">
    </div>
    <div class="row">
        <button class="btn btn-primary"> Add Marks Master</button>
    </div>
</form>
</div>
<h2>Marks Master Table</h2>
<div>

<table class="table table-condensed table-responsive table-hover table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Session</th>
                <th width="70">Class</th>
                <th width="100">Stream</th>
                <th>Exam</th>
                <th>Subject</th>
                <th width="100">MM (theory)</th>
                <th width="100">PM (theory)</th>
                <th width="100">MM (prac)</th>
                <th width="100">PM (prac)</th>
                <th width="100">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Markmaster::all() as $mm)
            <tr>
                <td>{{$mm->id}}</td>
                <td>{{$mm->session}}</td>
                <td>{{$mm->class}}</td>
                <td>{{$mm->stream}}</td>
                <td>{{$mm->exam}}</td>
                <td>{{$mm->subject}}</td>
                <td>{{$mm->mmth}}</td>
                <td>{{$mm->pmth}}</td>
                <td>{{$mm->mmpr}}</td>
                <td>{{$mm->pmpr}}</td>    
                <td>
                    <form class="inline" method="post" action="/admin/MarksMaster/{{$mm->id}}">
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