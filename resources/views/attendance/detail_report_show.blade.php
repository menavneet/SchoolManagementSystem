@extends('layout.admin')
@section('content')

<style>
    .Absent{
        background-color:lightcoral; 
    }
</style>
<table class="table table-condensed  table-responsive table-bordered">
        <thead>
            <tr>
                <th width="70">date</th>
                <th width="70">status</th>

            </thead>
            <tbody>
                @foreach ($attendance as $att)
                <tr>
                    <td>{{$att->date}}</td>
                <td class="{{$att->status}}">{{$att->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection