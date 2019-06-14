@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Student SMS Report</h1>
        </div>
        <div class="block-fluid">
            <div class="row-form clearfix" style="border-top: 0px none;">
                <div class="span3"><strong>Select Session</strong></div>
                <div class="span3"><select name="session_id" id="session_id" class="validate[required]"><option value="">Choose Session</option><option value="3">2018-2019</option></select></div>
            </div>
            <div class="row-form clearfix">
                <div class="span3"><strong>Select SMS Type</strong></div>
                <div class="span3"><select name="sms_id" id="sms_id"><option value="">Choose SMS Type</option><option value="12">Assesment Paper</option><option value="1">Attendance</option><option value="14">Fees Receipt</option><option value="10">Flag Hosting</option><option value="8">For Test</option><option value="3">General</option><option value="7">Home Work</option><option value="2">PTM</option><option value="5">Staff Birthday</option><option value="4">Student Birthday</option><option value="13">Test Paper</option><option value="6">Testing_sms</option><option value="9">UNIT TEST TEMP</option><option value="11">User Details</option></select></div>
            </div>						
            <div class="row-form clearfix">
                <div class="span3"><strong>From Date</strong></div>
                <div class="span3"><input name="date_from" id="date_from" placeholder="From Date" value="" class="hasDatepicker" style="width:93%;" readonly="readonly" type="text"><img class="ui-datepicker-trigger" src="http://schoolmanagement.accuratewebworld.co.in/images/calendar.gif" alt="Choose Date" title="Choose Date"></div>
            </div>
            <div class="row-form clearfix">
                <div class="span3"><strong>To Date</strong></div>
                <div class="span3"><input name="date_to" id="date_to" placeholder="To Date" value="" class="hasDatepicker" style="width:93%;" readonly="readonly" type="text"><img class="ui-datepicker-trigger" src="http://schoolmanagement.accuratewebworld.co.in/images/calendar.gif" alt="Choose Date" title="Choose Date"></div>
            </div>
            <div class="row-form clearfix" style="border-bottom: 0px none;">
                <div class="span3"><strong>Mobile No.</strong></div>
                <div class="span3"><input name="mobile_no" id="mobile_no" placeholder="Mobile No." value="" class="" type="text"></div>
            </div>
            <div class="footer tar">
                <button type="submit" name="button" id="button" class="btn offset3"><span class="isw-search"></span>Search</button>							
                <input name="sact" id="sact" value="search" type="hidden">
                <input name="form_wiz" value="show_form" type="hidden">
                                            <input name="is_validate" id="is_validate" value="Yes" type="hidden">							
            </div>
        </div>
    </div>
</div>
@endsection