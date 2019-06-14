@extends('layout.admin')
@section('content')
<h4 class="page-header">Edit Page ID.{{$page->id}}</h4>
<form method="post">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="form-group">
        <label>Edit Page</label>
        <textarea name="content" class="form-control edit" rows="10">{{$page->content}}</textarea>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
    </div>
</form>    
@endsection