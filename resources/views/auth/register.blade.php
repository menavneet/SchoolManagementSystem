@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>Admin</h3>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Add New</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="username" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                    <table class="table table-condensed table-hover table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th >Option</th>
                              </tr>
                            </thead>
                            <tbody>
                                  @foreach (App\User::all() as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            @if($user->id!=1)
                                            <form class="inline"  method="post" action="/admin/User/{{$user->id}}">
                                                  {{ csrf_field() }}
                                                  {{method_field('DELETE')}}
                                                  <button class="btn-link">delete</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
            
                                  @endforeach
                            </tbody>
                          </table>
            </div>
        </div>
    </div>
@endsection
