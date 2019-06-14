@extends('layout.main')
@section('content')
<div class="page-header">
    <h3>Download</h3>
</div>
    <h6>List of Download</h6>
    <div class="list-group">
        @foreach (App\Download::all() as $download)

        <a  href="/Download/{{$download->id}}" class="list-group-item">{{$download->title}}</a>
        @endforeach
        </div> 
@endsection