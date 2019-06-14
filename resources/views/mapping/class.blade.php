@extends('layout.admin')
@section('content')
     <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Class Mapping</h3>
        </div>
        <form method="post">
            {{ csrf_field() }}
            @foreach ($classes as $class)
            <div class="form-group">
                <label>Class - {{$class->name}}</label>
                <div class="form-group">
                    @foreach ($sections as $section)
                    <div class="checkbox-inline">
                        <input type="checkbox" name="classmap[]" value={{$class->id}}_{{$section->id}} 
                        @if (array_has($map,$class->id.'_'.$section->id))
                            checked=checked
                        @endif
                        >{{$section->name}}
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            <input type="submit" class="btn btn-primary" value="Change Mapping">
        </form>
    </div>
@endsection