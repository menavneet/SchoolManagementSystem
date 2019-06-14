@extends('layout.admin')
@section('content')
<h1>Grade Master</h1>
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Grade :</label>
        <input type="text" name="name" class="form-control" placeholder="Grade" required>
    </div>
    <div class="form-group">
        <label>Max Marks :</label>
        <input type="number" name="maxm" min="0" class="form-control" placeholder="Min Marks" required>
    </div>
    <div class="form-group">
        <label>Min Marks :</label>
        <input type="number" name="minm"  max="100" class="form-control" 
        placeholder="Max Marks" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Grade</button>
    </div>
</form>

<div>
        <table class="table table-condensed table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>SMS Name</th>
                    <th>Max Marks</th>
                    <th>Min Marks</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Grade::all() as $grade)
                <tr>
                    <td>{{$grade->id}}</td>
                    <td>{{$grade->name}}</td>
                    <td>{{$grade->maxm}}</td>
                    <td>{{$grade->minm}}</td>
                    <td>
                        <form class="inline" method="post" action="/admin/GradeMaster/{{$grade->id}}">
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