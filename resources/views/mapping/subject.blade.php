@extends('layout.admin')
@section('content')
     <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Subject Mapping</h3>
        </div>
        <form method="post">
            {{ csrf_field() }}
            @foreach ($classes as $class)
            <div class="form-group">
                <label>Class - {{$class->name}}</label>
                <div class="form-group">
                    @foreach ($subjects as $subject)
                    <div class="checkbox-inline">
                        <input type="checkbox" name="classmap[]" value={{$class->id}}_{{$subject->id}} 
                        @if (array_has($map,$class->id.'_'.$subject->id))
                            checked=checked
                        @endif
                        >{{$subject->name}}
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            <input type="submit" class="btn btn-primary" value="Change Mapping">
        </form>
    </div>
@endsection