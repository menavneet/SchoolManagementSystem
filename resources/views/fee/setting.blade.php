@extends('layout.admin')
@section('content')
<h1>Fee Setting</h1>
<div>
        <table class="table table-condensed table-responsive table-hover table-bordered">
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Fee Head</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fees SMS</td>
                    <td>Yes</td>
                </tr>
                <tr>
                        <td>2</td>
                        <td>Fine Amount</td>
                        <td>18</td>
                    </tr>
                    <tr>
                            <td>3</td>
                            <td>Fine Date</td>
                            <td>02</td>
                        </tr>
                        <tr>
                                <td>4</td>
                                <td>Receipt No</td>
                                <td>1</td>
                            </tr>
                    </tbody>
                </table>
            </div>
@endsection