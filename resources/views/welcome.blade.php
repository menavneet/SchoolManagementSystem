<!DOCTYPE html>
<html lang="en">
  <head>
    <title>M. P. BIRLA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body >
    @component('component.css')
    @endcomponent
    @component('component.header')
        
    @endcomponent
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach(App\Banner::all() as $a)
        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" 
          @if ($loop->first)
          class="active"
          @endif
          ></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach (App\Banner::all() as $banner)
          <div class="item 
          @if ($loop->first)
          active
          @endif
          ">
          <div alt="Los Angeles" class="banner" style="background-image:url('/img/{{$banner->banner}}');">
          </div>
          <div class="carousel-caption">
            {{--  <h4>Los Angeles {{$loop->index}}</h4>
            <p>LA is always so much fun!</p>  --}}
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="container body">
      <div class="row">
        <div class="col-md-3">
          <div class="page-header">
            <h4>News & Notice <i class="fa fa-newspaper-o" aria-hidden="true"></i></h4>
          </div>
          <div class="panel">
            <div class="list-group">
              @foreach (App\News::all() as $news)
              <a href="/News" class="list-group-item pop"><i class="fa fa-angle-double-right fa-lg" aria-hidden="true"></i> {{$news->subject}}</a>
              @endforeach
            </div> 
          </div>
          <div class="page-header">
            <h4>Topper <i class="fa fa-star-o" aria-hidden="true"></i></h4>
          </div>
          <div class="panel">
            <div  class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                @foreach (App\Topper::all() as $topper)
                <div class="item 
                @if ($loop->first)
                active
                @endif
                ">
                <div>
                  <img src="/img/{{$topper->photo}}" style="margin:auto" height=200 class="img-responsive">
                </div>
                <div>
                  <div class="text-center"><label>{{$topper->name}}</label></div>
                  <div class="text-center">{{$topper->class}}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="text-center panel pop">
          <a href="/Download">
          <img src="/image/download.jpg" width="100%"><br>
          <label>
            Download
          </label>
          </a>
        </div>
        <div class="text-center panel pop">
          <a href="/KidsCorner">
          <img src="/image/kidscorner.jpg" width="100%"><br>
          <label>
            Kid'Corner
          </label>
          </a>
        </div>
      </div>
      <div class="col-md-7">
        
        <div class="page-header">
          <h4>
            THE  M.P.BIRLA GROUP
          </h4>
        </div>
        <div>
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          The M. P. Birla Group is one of the leading industrial Groups in India. The Group owns a number of factories producing a wide range of products, including cement, jute, cables, auto interiors, etc. Birla Corporation Limited is the flagship company of the Group. It has its Registered and Principal Office in Kolkata and offices in Mumbai and New Delhi, among other places. The Group includes companies like Universal Cables Ltd., Vindhya Telelinks Ltd., Birla Ericsson Optical Ltd., Universal-ABB Power Cables Ltd. and Hindustan Gum & Chemicals Ltd. Other than Kolkata, Birlapur and Durgapur, the Group’s plants are located at Rewa, Satna, Raebareli, Chanderia, Jodhpur, Viramgam, Bhiwani, Gurgaon and Chakan (Pune). The Group is well-known for its philanthropic and educational activities. It supports a number of technical and management institutions, hospitals and schools. It has set up some of the most prominent educational institutions and hospitals in the country. <i class="fa fa-quote-right" aria-hidden="true"></i>
        </div>
        <div class="page-header">
          <h4>Welcome To M.P. Birla Shiksha Bhawan</h4>
        </div>
        <h5><u>Our Responsibility Toword Children</u></h5>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i> They should be known for their integrity, sincerity and truthfulness.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  They are taught the values of our culture and heritage and the importance of preserving it.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To mould the Students as a true and responsible citizen of the Country and face the challenges as it comes.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To become part of the development of the nation and contribute for the wellness of society.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To teach them to help the mankind.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To prepare them to face the challenge of the 21st century.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To dream for a beautiful world where there is no hatred, war or enemity.</p>
        <p><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i>  To do good deeds and be kind to your fellow country men.</p>
        <div class="page-header">
          <h4>Our INSIPIRATION</h4>
        </div>
        <div>
          <div class="row section">
            <div class="col-md-3 bg-maroon">
              <img src="/image/team5.jpg" class="img-rounded img-thumbnail"  height=150 width=150>
              <label>(Late) Sri Madhav Prasad Birla</label>
            </div>
            <div class="col-md-9">
              <p>Great Visionery,Innovator and an Entrepreneur of extraordinary ability with dynamic efficiency</p>
              <p>Architect of multi-product, multilocation Rs.5000 Crore M.P.Birla Group.</p>
              <p>Pioneer in the Birla Industrial Empire in Cement, Cable, Calcium Carbide, Industrial Gases, Natural & PVC Floor covering among other, where Group has formidable presence now.</p>
            </div>
          </div>
          <div class="row section">
            <div class="col-md-3 pull-right clearfix">
              <img src="/image/team6.jpg" class="img-rounded img-thumbnail"  height=150 width=150>
              <label>(Late) Smt. Priyamvada Birla</label>
            </div>
            <div class="col-md-9">            
              <p>Guiding force of the group since death of Mr.M.P Birla in 1990 till her sad demise on 03.07.2004</p>
            <p>
              Her message to team members was: "Set yourself a goal and get your priorities right."
            </p>
            <p>
              According to her four pillars of success are:
              <ul>
                <li>Education (Vidya)</li>
                <li>Devotion (Shraddha)</li>
                <li>Deep Thinking</li>
                <li>Excellence</li>
                <ul>
                </p>
              </div>
            </div>
            {{--  <div class="clearfix"></div>  --}}
            <div class="row section">
              <div class="col-md-3">
                  <img src="/image/team7.jpg" class="img-rounded img-thumbnail"  height=150 width=150> 
                  <label>(Late) Shri. Rajendra S Lodha</label>
                </div>
                <div class="col-md-9">            
                  <p>A Gold Medalist Chartered Accountant.</p>
                  <p>President of federation of Indian Chambers of Commerce & Indusdtry(FICCI) in it Platinum Jubilee year.</p>
                  <p>Served on the Indian Prime Minister's Council of Trade & Indusdtry and the Board of Trade.</p>
                  <p>Served on the Central Borad of the State Bank of India.</p>
                  <p>Chairman Of South Asia Business Forum sponsored by the Asian Development Bank (ADB) & many more.</p>
                </div>
              </div>
              <div class="row section">
                <div class="col-md-3 pull-right">
                  <img src="/image/team8.jpg" class="img-thumbnail" height=150 width=150>
                  <label>Mr. Harsh V. Lodha</label>
                </div>
                <div class="col-md-9">            
                  <p>A chartered acoountant of repute, he is associate with M/S Lodha  &Co., Charatered Accountant and is on the Boards of Alfred Herbert (India) Ltd, Fenner (India) Ltd,Herdilla Chemicais Ltd. Pratapur Sugar & Industries Ltd, HGI Industries Ltd, M/S OCL Limited,M/S Universal Cables Limited,M/S Vindhya Telelinks Limited,Biral Furukawa & M/S Thai Carbon Black Public Limited Company and a number of other companies. </p>
                </div>
              </div>
              {{--  <div class="clearfix"></div>  --}}
            </div>

            <h5 class="text-center">Thank You</h5>
          </div>
          <div class="col-md-2">
            @component('component.rightsidebar')
                
            @endcomponent
      </div>
    </div>
   
    </div>
</div>
  @component('component.footer')
      
  @endcomponent

</body>
</html>
