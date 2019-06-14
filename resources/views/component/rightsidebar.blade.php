<div>
<div class="page-header">
  <h4> Teacher & Staff Birthday <i class="fa fa-birthday-cake" aria-hidden="true"></i></h4>
</div>
<div class="panel">
  <div  class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      @foreach (App\Birthday::where('type','=',1)->get() as $birthday)
      <div class="item 
      @if ($loop->first)
      active
      @endif
      ">
      <div>
        {{--  <img src="/img/{{$birthday->photo}}" style="margin:auto" height=200 class="img-responsive">  --}}
        <div style="background-image:url('/img/{{$birthday->photo}}');margin:auto;" class="photo">
          <img src="/image/bday.png" height="200" width="100%" class="photo">
        </div>
      </div>
      <div>
        <div class="text-center"><label>{{$birthday->name}}</label></div>
        <div class="text-center"><i class="fa fa-birthday-cake" aria-hidden="true"></i><small> {{$birthday->dob}} </small>
          <i class="fa fa-birthday-cake" aria-hidden="true"></i></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
  <div class="page-header">
    <h4>Student <i class="fa fa-birthday-cake" aria-hidden="true"></i></h4>
  </div>
  <div class="panel">
    <div  class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach (App\Birthday::where('type','=',0)->get() as $birthday)
        <div class="item 
        @if ($loop->first)
        active
        @endif
        ">
            <div>
              {{--  <img src="/img/{{$birthday->photo}}" style="margin:auto" height=200 class="img-responsive">  --}}
              <div style="background-image:url('/img/{{$birthday->photo}}');margin:auto;" class="photo">
                <img src="/image/bday.png" height="200" width="100%" class="photo">
              </div>
            </div>
            <div>
              <div class="text-center"><label>{{$birthday->name}}</label></div>
              <div class="text-center"><i class="fa fa-birthday-cake" aria-hidden="true"></i><small> {{$birthday->dob}} </small>
                <i class="fa fa-birthday-cake" aria-hidden="true"></i></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
  </div>