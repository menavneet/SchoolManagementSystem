@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <form name="post_req" id="post_req" method="post" action="fees-receipt.php">
        <div class="span4">
            <div class="head clearfix">
                <div class="isw-documents"></div>
                <h1>Fee Receipt</h1>
            </div>					
            <div class="block-fluid">
                <div class="row-form clearfix" style="border-top: 0px none;">
                    <div class="span5"><strong>Select Session</strong></div>
                    <div class="span7"><select name="session_id" id="session_id" class="validate[required]"><option value="">Choose Session</option><option value="3">2018-2019</option></select></div>
                </div>
                <div class="row-form clearfix">
                    <div class="span5"><strong>Class Name</strong></div>
                    <div class="span7"><select name="class_id" id="class_id" class="validate[required]"><option value="">Choose Class</option> <option value="2">Nursery</option><option value="3">L.K.G</option><option value="4">U.K.G</option><option value="5">1st</option><option value="6">2nd</option><option value="7">3rd</option><option value="8">4th</option><option value="9">5th</option><option value="10">6th</option><option value="11">7th</option><option value="12">8th</option><option value="13">9th</option><option value="14">10th</option><option value="15">11th</option><option value="16">12th</option></select></div>
                </div>
                <div class="row-form clearfix">
                    <div class="span5"><strong>Section Name</strong></div>
                    <div class="span7"><span id="result_details_class"><span id="initial_blank_class"><select name="section_id" id="section_id" class="validate[required]"><option value="">Choose Section</option></select></span></span></div>
                </div>						
                <div class="row-form clearfix">
                    <div class="span5"><strong>Name &amp; Roll No.</strong></div>
                    <div class="span7"><span id="result_details_section"><select name="student_id" id="student_id" class="validate[required]"><option value="">Choose Enrollment No</option></select></span></div>
                </div>
                <div class="row-form clearfix">
                    <div class="span5"><strong>Fee Mode</strong></div>
                    <div class="span7"><select name="fees_mode_id" id="fees_mode_id" class="validate[required]"><option value="">Choose Fee Mode</option> <option value="1">Monthly</option><option value="2">Quarterly</option><option value="3">Half-Yealry</option><option value="4">Yearly</option></select></div>
                </div>
                <div class="row-form clearfix">
                    <div class="span5"><strong>Duration</strong></div>
                    <div class="span7"><span id="result_details"><select name="fees_duration_id" id="fees_duration_id" class="validate[required]"><option value="">Choose Duration</option><option value="13">Jul-Sep</option><option value="14">Oct-Dec</option><option value="15">Jan-Mar</option><option value="16">Apr-Jun</option></select></span></div>
                </div>						
                <div class="row-form clearfix">
                    <div class="span5"><strong>Receipt Date</strong></div>
                    <div class="span7"><input name="receipt_date" id="datepicker" style="width:91%" value="2018-02-24" placeholder="Receipt Date" class="validate[required] hasDatepicker" type="text"><img class="ui-datepicker-trigger" src="http://schoolmanagement.accuratewebworld.co.in/images/calendar.gif" alt="..." title="..."></div>
                </div>
                <div class="row-form clearfix" style="border-bottom: 0px none;">
                    <button type="button" name="button4" id="button4" onclick="check_prev_details('fees-receipt.php');" class="btn offset1"><span class="isw-left"></span>Previous Details</button>
                    <button type="submit" name="button" id="button" class="btn"><span class="isw-ok"></span>New Receipt</button>
                    <input name="act" id="act" value="search" type="hidden">
                    <input name="is_validate" id="is_validate" value="Yes" type="hidden">
                    <input name="fees_receipt_id" id="fees_receipt_id" value="" type="hidden">
                    <input name="page" id="page" value="" type="hidden">
                    <input name="form_wiz" value="" type="hidden">
                                            </div>
            </div>
        </div>
    </form>		
                                        <div class="span8"> 
        <div class="head clearfix"><h1>Fee Receipt Table</h1></div>
        <div class="block-fluid table-sorting clearfix">
            <table class="table" id="tSortable_2" width="100%" cellspacing="0" cellpadding="0">
                
                <thead>						    
                    <tr>
                        <td><strong>S.No.</strong></td><td><strong>Receipt No.</strong></td><td><strong>Date</strong></td><td><strong>Duration</strong></td><td><strong>Total Fee</strong></td><td><strong>Paid</strong></td><td><strong>Action</strong></td>							</tr>
                </thead>
                <tbody>
                                            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection