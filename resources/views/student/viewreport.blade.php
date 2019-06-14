@extends('layout.admin')
@section('content')
            <div class="col-sm-12">
                <div class="">
                    <h3>Select Student Detail</h3>
                </div>
                    <table class="table table-condensed table-hover table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Rol No</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->rollno}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->father_name}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->address}}</td>
                                    </tr>
                                 @endforeach
                            </tbody>
                    </table>
            </div>
       
@endsection