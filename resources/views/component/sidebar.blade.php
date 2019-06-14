<style>
        .sub-item{
                background-color:#0092bc;
                color:white !important;
        }
        .sub-item:hover{
                cursor:pointer;
                background-color:#22a2cc !important;
                color:white !important;

        }
</style>

<div class="list-group">
        <a href="/admin" class="list-group-item sub-item"> Admin</a>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#content-manager"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Content Manage</a>
        <div class="collapse" id="content-manager">
                <a href="/admin/Banner" class="list-group-item"> Banner</a>
                <a href="/admin/Download" class="list-group-item"> Download</a>
                <a href="/admin/Menu" class="list-group-item"> Menu | Section</a>
                <a href="/admin/Page" class="list-group-item"> Page</a>
                <a href="/admin/Birthday" class="list-group-item"> Birthday</a>
                <a href="/admin/News" class="list-group-item"> News</a>
                <a href="/admin/Topper" class="list-group-item"> Topper</a>
                <a href="/admin/Gallery" class="list-group-item"> Gallery</a>
                <a href="/admin/Photo" class="list-group-item"> Photo</a>
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#master-record"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Master Record</a>
        <div class="collapse" id="master-record">
                <a href="/admin/Session" class="list-group-item">Session</a>
                <a href="/admin/State" class="list-group-item">State</a>
                <a href="/admin/City" class="list-group-item">City</a>
                <a href="/admin/Religion" class="list-group-item">Religion</a>
                <a href="/admin/Category" class="list-group-item">Category</a>              
                <a href="/admin/Stream" class="list-group-item">Stream</a>              
                <a href="/admin/Class" class="list-group-item">Class</a>
                <a href="/admin/_Section" class="list-group-item">Section</a>
                <a href="/admin/ClassMapping" class="list-group-item">Class Mapping</a>
                <a href="/admin/SubjectType" class="list-group-item">Subject Type</a>
                <a href="/admin/Subject" class="list-group-item">Subject</a>
                <a href="/admin/SubjectMapping" class="list-group-item">Subject Mapping</a>                                
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#student"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Student</a>
        <div class="collapse" id="student">
                <a href="/admin/StudentRegistration" class="list-group-item">Registration</a>
                <a href="/admin/StudentDetail" class="list-group-item">Detail & Edit</a>
                <a href="/admin/StudentReport" class="list-group-item">Report</a>
                <a href="/admin/StudentReregistration" class="list-group-item">Re-Registration</a>                
                <a href="/admin/IdentityCard" class="list-group-item">Identity Card</a>
                <a href="" class="list-group-item">Transfer Certificate</a>
                <a href="" class="list-group-item">Certificate</a>                         
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#Attendance"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Attendance</a>
        <div class="collapse" id="Attendance">
                <a href="/admin/Attendance" class="list-group-item">Student Attendance</a>
                <a href="/admin/AttendanceSMS" class="list-group-item">Attendance SMS</a>
                <a href="/admin/AttendanceDetailReport" class="list-group-item">Attendance Detail Report</a>
                <a href="/admin/AttendanceReport" class="list-group-item">Attendance Report</a>                                              
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#sms"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> SMS</a>
        <div class="collapse" id="sms">
                <a href="/admin/SMSTemplate" class="list-group-item">SMS Template</a>
                <a href="/admin/StudentSMS" class="list-group-item">Student SMS</a>
                <a href="/admin/StaffSMS" class="list-group-item">Staff SMS</a>
                <a href="/admin/BirthdaySMS" class="list-group-item">Birthday SMS</a>                
                <a href="/admin/OtherSMS" class="list-group-item">Other SMS</a>
                <a href="/admin/ShowSMS" class="list-group-item">Show SMS</a>
                <a href="/admin/SendSMS" class="list-group-item">Send SMS</a>
                <a href="/admin/StudentSMSReport" class="list-group-item">Student SMS Report</a>
                <a href="/admin/StaffSMSReport" class="list-group-item">Staff SMS Report</a>                                
                <a href="/admin/OtherSMSReport" class="list-group-item">Other SMS Report</a>                                
        </div> 
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#fee"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Fee</a>
        <div class="collapse" id="fee">
                <a href="/admin/FeesMaster" class="list-group-item">Fees Master</a>
                <a href="/admin/FeesSetting" class="list-group-item">Fees Setting</a>
                <a href="/admin/FeesMapping" class="list-group-item">Fees Mapping</a>
                <a href="/admin/FeesReciep" class="list-group-item">Fees Reciept</a>                
                <a href="/admin/PaidFeesReport" class="list-group-item">Paid Fees Report</a>
                <a href="/admin/UnpaidFeesReport" class="list-group-item">Unpaid Fees Report</a>                           
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#examination"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Examination</a>
        <div class="collapse" id="examination">
                <a href="/admin/ExaminationMaster" class="list-group-item">Examination Master</a>
                <a href="/admin/MarksMaster" class="list-group-item">Marks Master</a>
                <a href="/admin/MarksEntry" class="list-group-item">Marks Entry</a>
                <a href="/admin/GradeMaster" class="list-group-item">Grade Master</a>                
                <a href="/admin/ExaminationReportCard" class="list-group-item">Examination Report Card</a>
                <a href="/admin/ExaminationReport" class="list-group-item">Examination Report</a>                           
        </div>       
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#transport_and_hostel"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i> Transport & Hostel</a>
        <div class="collapse" id="transport_and_hostel">
                <a href="" class="list-group-item">Vehicle Type</a>
                <a href="" class="list-group-item">Vehicle Entry</a>
                <a href="" class="list-group-item">Vehicle Allotment</a>
                <a href="" class="list-group-item">Vehicle Allotment Detail</a>                
                <a href="" class="list-group-item">Vehicle Report</a>
                <a href="" class="list-group-item">Vehicle Allotment Report</a>                                                  
        </div>  
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#library"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i>Library</a>
        <div class="collapse" id="library">
                <a href="" class="list-group-item">Book Master</a>
                <a href="" class="list-group-item">Library Setting</a>
                <a href="" class="list-group-item">Membership Registration</a>
                <a href="" class="list-group-item">Book Issue</a>                
                <a href="" class="list-group-item">Book Return</a>
                <a href="" class="list-group-item">Return Book Report</a>                           
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#employee"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i>Employee</a>
        <div class="collapse" id="employee">
                <a href="" class="list-group-item">Department</a>
                <a href="" class="list-group-item">Designation</a>
                <a href="" class="list-group-item">Employee Type</a>
                <a href="" class="list-group-item">Employee Registration</a>                
                <a href="" class="list-group-item">Manage Employee</a>
                <a href="" class="list-group-item">Employee Report</a>                           
        </div>
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#payroll"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i>Payroll</a>
        <div class="collapse" id="payroll">
                <a href="" class="list-group-item">Employee Attendance</a>
                <a href="" class="list-group-item">Employee Attendance Report</a>
                <a href="" class="list-group-item">Allowance</a>
                <a href="" class="list-group-item">Deduction</a>                
                <a href="" class="list-group-item">Salary Setting</a>
                <a href="" class="list-group-item">Employee Salary Report</a>                           
        </div> 
        <a class="list-group-item sub-item" data-toggle="collapse"  data-target="#time_table"><i class="fa fa-angle-double-right fa-lg pull-right" aria-hidden="true"></i>Time Table</a>
        <div class="collapse" id="time_table">
                <a href="" class="list-group-item">Period Master</a>
                <a href="" class="list-group-item">Time Table Entry</a>
                <a href="" class="list-group-item">Class Time Table</a>
                <a href="" class="list-group-item">Teacher Time Table</a>                                     
        </div>        

</div> 