@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <div class="span6">
        <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Birthday Student</h1>
        </div>
        
        <div class="block-fluid">
        <table class="table">
            <tbody><tr>
            <th>S.No.</th>
            <th>Student Name</th>
            <th>Roll No.</th>
            <th>Class</th>
            <th>Section</th>
            </tr>
                                </tbody></table>					</div>
        
    </div>
    
    <div class="span6">
        <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Birthday Staff</h1>
        </div>
        <form name="post_req" id="post_req" method="post" action="Birthday-SMS.php">
        <div class="block-fluid">
        <table class="table">
            <tbody><tr>
            <th>S.No.</th>
            <th>Employee Name</th>
            <th>Emp Code</th>
            </tr>
                                </tbody></table>					</div>
        </form>
    </div>
    
</div>
@endsection