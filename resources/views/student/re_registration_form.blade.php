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
            <h3>Student Re-registration</h3>
        </div> 
<form method="post" action="/admin/StudentReregistrationSubmit" enctype="multipart/form-data" action="/test">
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
        <label>Date Of Re-registration</label>
        <input class="form-control" name="dor" type="date" required>
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary">Re-registration</button>
    </div>
</div>

<div class="col-sm-12">
    <div class="">
        <h3>Select Student Detail</h3>
    </div>
    <table class="table table-condensed table-hover table-responsive table-bordered">
        <thead>
            <tr>
                <th width="400"><input type="checkbox" id="selectall">select all</th>
                <th>Rol No</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Section</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td><input type="checkbox" name="checkbox[]" value="{{$student->id}}"> 
                                    <select name="status[{{$student->id}}]">
                                        <option>Admission</option>
                                        <option selected="selected">Passed</option>
                                        <option>Failed</option>
                                        <option>Closed</option>
                                    </select>
                                    <input type="text" placeholder="Roll No (optional)" name="rollno[{{$student->id}}]">
                                </td>
                                <td>{{$student->rollno}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->father_name}}</td>
                                <td>{{$student->section}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </form>
                    <script>
                        $('document').ready(function(){
                            $('#selectall').on('click',function(){
                                if (!$(this).is(':checked'))
                                $('input[type=checkbox]').attr('checked',false);
                                else
                                $('input[type=checkbox]').attr('checked', true);
                            });
                        });
                        function popupprint(url){
                            window.open(url,'popup','width=800,scrollbars=no,resizable=no');
                        }
                    </script>
            </div>
       
@endsection