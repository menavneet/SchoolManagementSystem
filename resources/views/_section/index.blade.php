@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Section</h3>
        </div>

        <h4>Add New Section</h4>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Section Name</label>
                <input type="text" name="name" placeholder="Enter Section Name" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Add Section">
            </div>
        </form>
        <div>
            <h2 class="text-center">Section Index</h2>
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
                            @foreach (App\SchoolSection::all() as $Section)
                            <tr>
                                <td>{{$Section->id}}</td>
                                <td>{{$Section->name}}</td>
                                <td>{{$Section->created_at}}</td>
                                <td>
                                        <form class="inline"  method="post" action="/admin/_Section/{{$Section->id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                        </form>
                                        <form class="inline"  method="post" action="/admin/_Section/{{$Section->id}}">
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