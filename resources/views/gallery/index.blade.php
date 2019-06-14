@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Gallery</h3>
        </div>
        <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Name</label>
            <input type="text" name="name" placeholder="Enter Gallery Name" class="form-control" required>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Gallery</button>
        </div>
        </form>
        
        <div>
            <table class="table table-condensed table-responsive table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Gallery</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Gallery::all() as $gallery)
                    <tr>
                        <td>{{$gallery->id}}</td>
                        <td>{{$gallery->name}}</td>
                        <td>
                            <form class="inline" method="post" action="/admin/Gallery/{{$gallery->id}}">
                                {{ csrf_field() }}
                                {{method_field('PATCH')}}
                                <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                            </form>
                                    <form class="inline"  method="post" action="/admin/Gallery/{{$gallery->id}}">
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