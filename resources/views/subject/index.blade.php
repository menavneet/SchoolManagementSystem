@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Subject Type</h3>
        </div>

        <h4>Add New Subject Type</h4>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>select subject type</label>
                <select name="subject_type_id" class="form-control">
                    @foreach (App\SchoolSubjectType::all() as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Subject Name</label>
                <input type="text" name="name" placeholder="Enter Subject Name" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Add Subject">
            </div>
        </form>
        <div>
            <h2 class="text-center">Subject Type Index</h2>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Subject Type</th>
                            <th>Created At</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (App\SchoolSubject::all() as $Subject)
                            <tr>
                                <td>{{$Subject->id}}</td>
                                <td>{{$Subject->name}}</td>
                                <td>{{$Subject->subject_type}}</td>
                                <td>{{$Subject->created_at}}</td>
                                <td>
                                        <form class="inline"  method="post" action="/admin/Subject/{{$Subject->id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                        </form>
                                        <form class="inline"  method="post" action="/admin/Subject/{{$Subject->id}}">
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