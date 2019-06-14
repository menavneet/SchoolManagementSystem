@extends('layout.admin')
@section('content')
<h1>Fees Master</h1>
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Fee Head</label>
        <input type="text" name="name" placeholder="Fee Name" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> Add Fee Master</button>
    </div>
</form>
<div>
        <table class="table table-condensed table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Fee Head</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Fee::all() as $fee)
                <tr>
                    <td>{{$fee->id}}</td>
                    <td>{{$fee->name}}</td>
                    <td>
                        <form class="inline" method="post" action="/admin/FeesMaster/{{$fee->id}}">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> delete</button>
                        </form>
                     </td>
                </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                
            </div>

@endsection