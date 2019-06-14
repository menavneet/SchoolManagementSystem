<div class="container-fuild" style="color:white;text-shadow:2px 2px 2px #444;padding-bottom:30px">
  <div class="row text-center" >
      <div class="col-md-3"><i class="fa fa-phone" aria-hidden="true"></i> +91-(0532)-2567265</div>
      <div class="col-md-3"><i class="fa fa-phone" aria-hidden="true"></i>+91-945-539-8673 </div>
      <div class="col-md-3"><i class="fa fa-envelope" aria-hidden="true"></i> contactl@mpbirlaschool.org</div>
      <div class="col-md-3"><i class="fa fa-envelope" aria-hidden="true"></i> principal@mpbirlaschool.org</div>    
  </div>
  <div class="hidden-sm hidden-xs" style="min-height:200px;background-color:#ee4848">
    <div class="text-center heading" style="padding-top:50px;font-size:3em;">Welcome To M.P. Birla Shiksha Bhawan & Inter College<br>
      <span class="heading" style="font-size:0.6em">Chhatnag, Jhusi, Allahabad</span>
    </div>
  </div>
  <div class="hidden-md hidden-lg" style="min-height:200px;background-color:#ee4848">
      <div class="text-center heading" style="padding-top:50px;font-size:1.5em;">Welcome To M.P. Birla Shiksha Bhawan & Inter College<br>
        <span class="heading" style="font-size:0.6em">Chhatnag, Jhusi, Allahabad</span>
      </div>
    </div>
</div>
      <nav class="navbar navbar-inverse"  >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a><li>
              @foreach (App\Menu::with('sections')->get() as $menu)
              @if($menu->countSection()==0)
              <li><a href="/Page/{{$menu->page_id}}"> {{$menu->title}}</a></li>
              @else
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$menu->title}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  @foreach($menu->sections as $section)
                  <li><a href="/Page/{{$section->page_id}}">{{$section->title}}</a></li>
                  @endforeach
                </ul>
              </li>
              @endif    
              @endforeach
              <li><a href="/News">News</a><li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @foreach(App\Gallery::all() as $gellary)
                    <li><a href="/Gallery/{{$gellary->id}}">{{$gellary->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="/ContactUs">Contact Us</a><li>
            </ul>
          </div>
        </div>
      </nav> 