@extends('layout.admin')
@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>Photo</h3>
        </div>
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Select Gallery</label>
                <select name="gallery_id">
                    @foreach (App\Gallery::all() as $gallery)
                        <option value="{{$gallery->id}}">{{$gallery->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Select Photo</label>
                <input type="file" name="photo">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Add Photo</button>
            </div>
        </form>
        <div class="clearfix"></div>
        <div class="form-group">
            @foreach (App\Gallery::with('photos')->get() as $gallery)
            <div class="page-header">
                <h4>{{$gallery->name}}</h4>
            </div>
            @foreach ($gallery->photos as $photo)
            <div style="max-width:300px;display:inline-block;margin:5px;">
                <img src="/img/{{$photo->photo}}" height="150">
                  <div class="text-center">
                      <form class="inline"  method="post" action="/admin/Photo/{{$photo->id}}">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                      </form>
                    </div>
                </div>                              
                @endforeach
        @endforeach
    </div>
</div>
    @endsection