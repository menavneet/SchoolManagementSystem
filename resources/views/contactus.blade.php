@extends('layout.main')
@section('content')
<div class="page-header">
        <h4>School's Location <i class="fa fa-map-signs" aria-hidden="true"></i></h4>
      </div>
      <div>
        <style>
          #map {
            height: 400px;
            width: 100%;
          }
        </style>
        
        <div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: 25.409400, lng: 81.909060};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjz64JM0NH6vfzPevPOpt8J5y8BYPGzaU 	
        &callback=initMap"></script>
        
      </div>
      <div class="page-header">
        <h4>Contact Us</h4>
      </div>
      <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
          <form method="post">
            <h4>Send Your Feedback</h4>
            <div class="form-group">
              <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Enter Your Message" rows="10"></textarea>
            </div>
            <div class="form-group text-right">
              <button><i class="fa fa-send" aria-hidden="true"></i> Send</button>
            </div>
          </form>
        </div>
      </div>
@endsection