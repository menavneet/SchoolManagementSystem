@extends('layout.admin')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="head clearfix">
            <div class="isw-documents"></div>
            <h1>Other SMS</h1>
        </div>
        <div class="block-fluid">
            <div class="row-form clearfix" style="border-top: 0px none;">
            <div class="span3"><strong>SMS Template</strong></div>
            <div class="span4"><select name="sms_type" id="sms_type" class="validate[required]"><option value="">Choose SMS Type</option><option value="Dear Parents, Kindly see and sign the Paper's Name assessment papers of your ward Student's Name and send them positively by tomorrow. Regards, Sender">Assesment Paper</option><option value="Dear Parents, your ward $student_name is absent in the School. Regards, Principal, BGSC">Attendance</option><option value="Dear Parents, Thanks for submitting fee for $student_name Receipt No. $receipt_no Fee Amount Rs. $paid_fees Duration $duration on $receipt_date">Fees Receipt</option><option value="Dear Parents, Students should report at 9:00 a.m. sharp for Flag Hosting in regular school uniform on 15th August. Attendance is Compulsory, Principal, BGSC">Flag Hosting</option><option value="Dear Parents, Retest for class 9th and 11th.
English Literature Test will be held 12th April 2016. Timing 8:00 a.m. Sharp, Regard, Principal, BGSC">For Test</option><option value="Type anything">General</option><option value="Dear Parents, H.W. For Class 3- 
ENG LIT: Read L-22.
HIN LANG: L-15.
MATHS: Learn Table Of 12 To 18.
SCI/S.ST: Complete All Your Work.Regards,Staff,BGS">Home Work</option><option value="Dear Parents, Parents Teacher Meeting will be held on XXX ( DATE ). Timing xxxxx to xxxxx, Regard, Principal, Bishop George School">PTM</option><option value="Dear Teacher, <first_name> <last_name> May God fill your life with abundant blessings on your B'day. Many happy returns of the day. Regards, Principal, BGS">Staff Birthday</option><option value="Dear Parents, your ward $student_name May God fill your life with abundant blessings on your B'day. Many happy returns of the day. Regards, Principal, BGS">Student Birthday</option><option value="Dear Parents, Subject or Test name test papers are given to your ward Student's Name. Kindly go through it, sign it &amp; send it positively tomorrow. Regards, Sender">Test Paper</option><option value="Dear Parents, This is Testing SMS please acknowledge on this No. 8423319157. Regards, Smart Solution Team">Testing_sms</option><option value="Dear Parents,Unit Test-1 Schedule for Class Nursery,
4th Aug 2016- Maths Written,
Students must report at 9:30 a.m sharp, Regards, Principal, BGSC">UNIT TEST TEMP</option><option value="Dear User . Mobile Number is $mobile and password is $password">User Details</option></select></div>
            </div>
             <div class="row-form clearfix">
                <div class="span3"><strong>Mobile Number(s)</strong></div>
                <div class="span4"><textarea name="mobile_no" id="mobile_no" class="validate[required]" placeholder="Mobile Number(s) comma seprated"></textarea></div>						    
            </div>
            <div class="row-form clearfix" style="border-bottom: 0px none;">
                <div class="span3"><strong>Message</strong></div>
                <div class="span4"><textarea name="message" id="message" class="validate[required]"></textarea></div>
                <div class="span2"><div id="characterLeft"> 0 character (1 sms)</div></div>
            </div>
            <div class="footer tar">
                <button type="submit" name="button" id="button" class="btn offset3"><span class="isw-ok"></span>Submit</button>							
                 <input name="act" id="act" value="submit" type="hidden"><input name="id" value="1264825653" type="hidden">
            </div>
        </div>
    </div>
</div>
@endsection