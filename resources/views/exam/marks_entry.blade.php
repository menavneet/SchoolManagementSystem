@extends('layout.admin')
@section('content')
<h1>Marks Entry</h1>
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Select Session</label>
        <select name="session" class="form-control">
            <option value selected disabled> Select Session</option>
            @foreach (App\SchoolSession::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Select Class</label>
        <select name="class" class="form-control">
            <option value selected disabled>Select Class</option>
            @foreach (App\SchoolClass::all() as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
            <label>Select Stream</label>
            <select name="stream" class="form-control">
                <option value selected disabled>Select Steam</option>
                @foreach (App\SchoolStream::all() as $item)
                    <option value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
                <label>Select Exam</label>
                <select name="exam" class="form-control">
                    <option value selected disabled>Select Exam</option>
                    @foreach (App\Exam::all() as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label>Select Subject</label>
                    <select name="subject" class="form-control">
                        <option value selected disabled>Select Subject</option>
                        @foreach (App\SchoolSubject::all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>  
</form>
@if (!empty($exam))
<div>
    <form method="post" action="/admin/MarksStore">
        {{ csrf_field() }}
    <input type="hidden" name="exam" value="{{$exam}}">
    <input type="hidden" name="subject" value="{{$subject}}">
    <input type="hidden" name="session" value="{{$session}}">
    <input type="hidden" name="class" value="{{$class}}">
        <table class="table table-condensed table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th>S no.</th>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Exam</th>
                    <th>Subject</th>
                    <th width="300">Marks Obtain (Theory)</th>
                    <th width="300">Marks Obtain (Prac)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
            <input type="hidden" value="{{$student->id}}" name="student[]">
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$student->rollno}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class}} - {{$student->section}}</td>
                    <td>{{$exam}}</td>
                    <td>{{$subject}}</td>
                    <td><input type="number" class="form-control" name="theory[{{$student->id}}]" placeholder="Theory Marks"></td>
                    <td><input type="number" class="form-control" name="prac[{{$student->id}}]"  placeholder="Practical Marks"></td>
                </tr>
                 @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endif
@endsection