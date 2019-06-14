@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>City</h3>
        </div>

        <h4>Add New City</h4>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Select State</label>
                <select name="school_state_id" class="form-control">
                    @foreach (App\SchoolState::all() as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>City Name</label>
                <input type="text" name="name" placeholder="Enter City Name" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Add City">
            </div>
        </form>
        <div>
            <h2 class="text-center">City Index</h2>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (App\SchoolCity::all() as $City)
                            <tr>
                                <td>{{$City->id}}</td>
                                <td>{{$City->name}}</td>
                                <td>{{$City->created_at}}</td>
                                <td>
                                        <form class="inline"  method="post" action="/admin/City/{{$City->id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                        </form>
                                        <form class="inline"  method="post" action="/admin/City/{{$City->id}}">
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