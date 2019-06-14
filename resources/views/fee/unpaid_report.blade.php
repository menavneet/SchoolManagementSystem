@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Unpaid Fee Report</h1>
        </div>
        <div class="block-fluid">
            <div class="row-form clearfix" style="border-top: 0px none;">
                <div class="span3"><strong>Select Session</strong></div>
                <div class="span4"><select name="session_id" id="session_id" class="validate[required]"><option value="">Choose Session</option><option value="3">2018-2019</option></select></div>
            </div>
            
            <div class="row-form clearfix">
                <div class="span3"><strong>Class Name</strong></div>
                <div class="span4"><select name="class_id" id="class_id" class="validate[required]"><option value="">Choose Class</option> <option value="2">Nursery</option><option value="3">L.K.G</option><option value="4">U.K.G</option><option value="5">1st</option><option value="6">2nd</option><option value="7">3rd</option><option value="8">4th</option><option value="9">5th</option><option value="10">6th</option><option value="11">7th</option><option value="12">8th</option><option value="13">9th</option><option value="14">10th</option><option value="15">11th</option><option value="16">12th</option></select></div>
            </div>
            <div class="row-form clearfix">
                <div class="span3"><strong>Section Name</strong></div>
                <div class="span4"><span id="result_details_class"><span id="initial_blank_class"><select name="section_id" id="section_id"><option value="">Choose Section</option></select></span></span></div>
            </div>						
            <div class="row-form clearfix">
                <div class="span3"><strong>Name &amp; Roll No.</strong></div>
                <div class="span4"><span id="result_details_section"><select name="student_id" id="student_id"><option value="">Choose Roll No</option></select></span></div>
            </div>
            <div class="row-form clearfix" style="border-bottom: 0px none;">
                <div class="span3"><strong>Fee Mode</strong></div>
                <div class="span4"><select name="fees_mode_id" id="fees_mode_id" class="validate[required]"><option value="">Choose Fee Mode</option> <option value="1">Monthly</option><option value="2">Quarterly</option><option value="3">Half-Yealry</option><option value="4">Yearly</option></select></div>
            </div>
                <div class="footer tar">
                <button type="submit" name="button" id="button" class="btn offset3"><span class="isw-search"></span>Search</button>							
                <input name="sact" id="sact" value="search" type="hidden">
                <input name="form_wiz" value="show_form" type="hidden">
                    <input name="is_validate" value="No" type="hidden"> 
                                            
            </div>
        </div>
    </div>
</div>
@endsection