<!DOCTYPE html>
<html lang="en">
  <head>
    <title>M.P. Biral</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body >
    @component('component.css')
    @endcomponent
    @component('component.header')
    @endcomponent
    <div class="container body">
      <div class="row">
        <div class="col-md-10">
            @yield('content')
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
