@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Class</h3>
        </div>

        <h4>Add New Class</h4>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Class Name</label>
                <input type="text" name="name" placeholder="Enter Class Name" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Add Class">
            </div>
        </form>
        <div>
            <h2 class="text-center">Class Index</h2>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (App\SchoolClass::all() as $Class)
                            <tr>
                                <td>{{$Class->id}}</td>
                                <td>{{$Class->name}}</td>
                                <td>{{$Class->created_at}}</td>
                                <td>
                                        <form class="inline"  method="post" action="/admin/Class/{{$Class->id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                        </form>
                                        <form class="inline"  method="post" action="/admin/Class/{{$Class->id}}">
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