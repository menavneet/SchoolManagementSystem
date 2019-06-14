@extends('layout.admin')
@section('content')
<div >
    <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header">
        <h3>Add Banner</h3>
    </div>
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group" >
                <input type="file" name="banner">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Banner</button>
            </div>
        </form>
        <table class="table table-condensed table-hover table-bordered table-responsive">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Banner</th>
                    <th>Upload At</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Banner::all() as $banner)
                <tr>
                    <td>{{$banner->id}}</td>
                    <td><img width="200" src="/img/{{$banner->banner}}"></td>
                    <td>{{$banner->created_at}}</td>
                    <td>
                    <form class="inline"  method="post" action="/admin/Banner/{{$banner->id}}">
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