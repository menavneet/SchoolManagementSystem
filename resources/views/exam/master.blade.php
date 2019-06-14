@extends('layout.admin')
@section('content')
<div>
    <h1>Examination Master Table</h1>
    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Exam Name :</label>
            <input type="text" class="form-control" name="name" placeholder="Exam Name">
        </div>
        <div class="form-group">
            <button  type="submit" class="btn btn-primary"> Add Exam</button>
        </div>
    </form>
    <table class="table table-condensed table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th width="100">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Exam::all() as $exam)
                <tr>
                    <td>{{$exam->id}}</td>
                    <td>{{$exam->name}}</td>
                    <td>
                        <form class="inline"  method="post" action="/admin/ExaminationMaster/{{$exam->id}}">
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
@endsection