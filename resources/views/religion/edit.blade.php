@extends('layout.admin')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h3>Edit Religion</h3>
        </div>
        <form method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label>Edit Religion</label>
                <input type="text" name="name" class="form-control" value="{{$schoolReligion->name}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Change Religion Name</button>
      
            </div>
        </form>
    </div>
@endsection