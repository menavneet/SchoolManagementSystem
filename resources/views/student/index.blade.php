@extends('layout.admin')
@section('content')
            <div class="col-sm-12">
                <div class="page-header">
                    <h3>Select Student Detail</h3>
                </div>
                
                    <table class="table table-condensed table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Rol No</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->rollno}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->father_name}}</td>
                                    <td>
                                        <a  onclick="popupprint('/admin/StudentDetailPrint/{{$student->id}}')"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> view</a>
                                        <form class="inline"  method="post" action="/admin/Student/{{$student->id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script>
                            function popupprint(url){
                                window.open(url,'popup','width=800,scrollbars=no,resizable=no');
                            }
                        </script>
            </div>
       
@endsection