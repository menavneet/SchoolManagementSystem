@extends('layout.main')
@section('content')
<h1 class="text-center"><i class="fa fa-newspaper-o " aria-hidden="true"></i> Notice & News</h1>
<hr>
    @foreach (App\News::all() as $news)
        
    <div class="panel text-center col-sm-8 col-sm-offset-2" style="padding:5px;">
        <h4><u><b>{{$news->subject}}</b></u></h4>
        <h6>{{$news->created_at}} <i class="fa fa-clock-o" aria-hidden="true"></i></h6>
        <div>{!!$news->detail!!}</div>
    </div>
    @endforeach
@endsection