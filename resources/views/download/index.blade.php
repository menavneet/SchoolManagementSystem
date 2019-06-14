@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Download</h3>
        </div>
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>File Title</label>
                <input type="text" name="title" class="form-control" placeholder="File Title">
            </div>
            <div class="form-group">
                <label>Select File</label>
                <input type="file" name="file">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Add File</button>
            </div>
        </form>
        
        <div>
            <table class="table table-condensed table-responsive table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th >Option</th>
                    </tr>
                    </thead>
                    <tbody>
                          @foreach (App\Download::all() as $download)
                          <tr>
                                <td>{{$download->id}}</td>
                                <td>{{$download->title}}</td>
                                <td><input type="text" value="{{$download->file}}" readonly></td>
                                <td>
                                    <form class="inline"  method="post" action="/admin/Download/{{$download->id}}">
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