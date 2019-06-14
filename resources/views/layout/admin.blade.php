<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS</title>
    </head>
    <body>
        @component('component.css')            
        @endcomponent
        <style>
            body{
                background-color:#f5f8fa;
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
        <div class="container-fluid">
            <h1><i class="fa fa-building-o" aria-hidden="true"></i> School Managment System</h1><hr>
            <h4><i class="fa fa-user-circle" aria-hidden="true"></i> Admin Panel</h4>
            <div class="text-right form-group"><a href="{{ route('logout') }}"  class="btn btn-primary"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off" aria-hidden="true"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li></div>
            <div class="row">
                <div class="col-sm-2">
                    @component('component.sidebar')
                    @endcomponent
                </div>
                <div class="col-sm-10 panel">
                    @yield('content')
                </div>
            </div>
        </div>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script>
            $(document).ready(function(){
        
                     $('#section').on('change',function(){
                         var c=$('#class').val();
                         var s=$('#session').val();
                         var sec=$('#section').val();
                         var token='{{csrf_token()}}';
                         $.post('/admin/GetStudentName',{'session':s,'class':c,'section':sec,'_token':token},function(data,status){
                             var str;
                             data.forEach(element => {
                                 str+='<option value='+element.id+'>'+element.name+'</option>'
                             });
                         
                             $('#std_name').html(str).attr('multiple','multiple');
                         });
                     });

                $('.edit').summernote({
                    toolbar: [
                      // [groupName, [list of button]]
                      ['style', ['style']],
                      ['fontsize', ['fontsize']],
                      ['fontname',['fontname']],
                      ['font', ['strikethrough', 'superscript', 'subscript']],
                      ['color', ['color']],
                      ['para', ['ul', 'ol', 'paragraph']],
                      ['height', ['height']],
                      ['table', ['table']],
                      ['insert', ['link', 'picture','video']],
                      ['misc',['fullscreen','codeview','undo','redo']]
                    ]
                  ,fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                height:300});
            });
        </script>
    </body>
</html>
