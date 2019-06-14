@extends('layout.main')
@section('content')
<style>
    img:hover{cursor:pointer}
    .frame{
        padding:2px;
        border:solid 1px #ddd;
    }
</style>
<h1><u>{{$gallery->name}}  </u><small>(Click To View Full Image)<small></h1>
<div class="text-center ">
@foreach ($gallery->photos as $photo)
    <img src="/img/{{$photo->photo}}" type="button" height="200" class="frame" data-toggle="modal" data-target="#photo{{$photo->id}}">

<!-- Modal -->
<div id="photo{{$photo->id}}" class="modal fade" role="dialog" style="margin-top:100px">


    <!-- Modal content-->

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <img src="/img/{{$photo->photo}}">



</div>
@endforeach
</div>
@endsection