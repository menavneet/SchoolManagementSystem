@extends('layout.admin')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h3>Edit Gallery </h3>
        </div>
        <form method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label>Enter Title</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Title" value="{{$gallery->name}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Change Gallery Name</button>
            </div>
        </form>
    </div>
@endsection