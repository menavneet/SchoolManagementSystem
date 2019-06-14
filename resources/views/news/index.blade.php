@extends('layout.admin')
@section('content')

<div class="col-sm-10 col-sm-offset-1">
    <div class="page-header">
        <h3>News</h3>
    </div>
    <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Subject</label>
            <input type="text" name="subject" placeholder="Enter Subject" class="form-control">
        </div>
        <div class="form-group">
            <label>Enter Details</label>
            <textarea class="form-control edit" name="detail" placeholder="Enter Detail"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add News</button>
        </div>
    </form>
        <div>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Subject</th>
                        <th>Detail</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\News::all() as $news)
                            <tr>
                                <td>{{$news->id}}</td>
                                <td>{{$news->subject}}</td>
                                <td>{{$news->detail}}</td>
                                <td>
                                    <form class="inline"  method="post" action="/admin/News/{{$news->id}}">
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