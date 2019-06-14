<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        @component('component.css')            
        @endcomponent
        <style>
            body{
                background-color:#ffffff;
            }
            .page-header>*{
                padding:5px;
                border-radius:2px;
                background-color:#22a2cc;
                color:#ffffff;
                text-decoration:underline;
              }
              .btn-primary{
                  background-color:#22a2cc !important;
                  color:#ffffff;
                  border:0;
              }
              label{
                  text-decoration:none;
              }
        </style>
                @yield('content')
            </div>
        </div>
        <script>
            window.print();
            window.close();
        </script>
    </body>
</html>
