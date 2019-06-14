@extends('layout.admin')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h1>Student SMS</h1>
<form method="post">
    {{ csrf_field()}}
<div class="form-group">
    <label>Select Session :</label>
    <select class="form-control" id="session">
        <option selected disabled>Select Session</option>
        @foreach (App\SchoolSession::all() as $item)
            <option value="{{$item->name}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Select Class :</label>
    <select class="form-control" id="class">
            <option selected disabled>Select Class</option>
        @foreach (App\SchoolClass::all() as $item)
            <option value="{{$item->name}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Select Section :</label>
    <select class="form-control" id="section">
            <option selected disabled>Select Section</option>
        @foreach (App\SchoolSection::all() as $item)
            <option value="{{$item->name}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Name & Roll No</label>
    <select class="form-control" name="students[]" id="std_name">

    </select>
</div>
<div class="form-group">
    <label></label>
    <select class="form-control" id="sms_temp">
        <option selected disabled>-Select Template-</option>
        @foreach (App\Smstemp::all() as $sms)
            <option value="{{$sms->message}}">{{$sms->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Write Message:</label>
    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write Your Message Here"></textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Add To Queue Message</button>
</div>
</form>
</div>
<script>
    $(document).ready(function(){
        $('#sms_temp').change(function(){
            $('#message').html(this.value);
        });
    });
</script>
@endsection