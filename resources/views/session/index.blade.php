@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Session</h3>
        </div>

        <h4>Add New Session</h4>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Session Name</label>
                <input type="text" name="name" placeholder="Enter Session Name" class="form-control">
            </div>
            <div class="form-group">
                <label>Session Start Date</label>
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label>Session End Date</label>
                <input type="date" name="end_date" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Add Session">
            </div>
        </form>
        <div>
            <h2 class="text-center">Session Index</h2>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Created At</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (App\SchoolSession::all() as $session)
                            <tr>
                                <td>{{$session->name}}</td>
                                <td>{{$session->start_date}}</td>
                                <td>{{$session->end_date}}</td>
                                <td>{{$session->created_at}}</td>
                                <td>
                                        <form class="inline"  method="post" action="/admin/Session/{{$session->id}}">
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