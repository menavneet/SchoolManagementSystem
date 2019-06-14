@extends('layout.admin')
@section('content')

            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Topper</h3>
        </div>
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Enter Detail</label>
                <input type="text" name="class" class="form-control" placeholder="Enter Class">    
            </div>
            <div class="form-group">
                <label>Select Photo</label>
                <input type="file" name="photo">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Add Topper</button>
            </div>
        </form>
        
        <div>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th >Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Topper::all() as $topper)
                        <tr>
                            <td><img src="/img/{{$topper->photo}}"></td>
                            <td>{{$topper->name}}</td>
                            <td>{{$topper->class}}</td>
                            <td>
                                    <form class="inline"  method="post" action="/admin/Topper/{{$topper->id}}">
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