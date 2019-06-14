<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/img/{folder}/{file}',function($folder,$file){
     $file=$folder.'/'.$file;
    return response()->file(storage_path('app/'.$file),['Content-type'=>'image']);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Gallery/{gallery}','GalleryController@show');
Route::get('/Page/{page}','PageController@show');
Route::get('/Download','DownloadController@show');
Route::get('/Download/{download}','DownloadController@getFile');
Route::get('/News','NewsController@show');
Route::get('/ContactUs',function(){return view('contactus');});

Route::group(['middleware' => ['auth']], function () {

    Route::post('/test','StudentController@test');
    Route::post('/admin/GetStudentName','StudentController@get_name');

    // Student Route
    Route::get('/admin/StudentDetailPrint/{student}','StudentController@print_detail');
    Route::get('/admin/StudentDetail','StudentController@search_detail');
    Route::get('/admin/StudentRegistration','StudentController@create');
    Route::get('/admin/StudentReregistration','StudentController@re_registration');
    Route::get('/admin/StudentReport','StudentController@report');
    Route::post('/admin/StudentReregistration','StudentController@re_registration_find');
    Route::post('/admin/StudentReregistrationSubmit','StudentController@re_registration_submit');
    Route::post('/admin/StudentReport','StudentController@find_report');
    Route::post('/admin/StudentDetail','StudentController@find_detail');
    Route::post('/admin/StudentRegistration','StudentController@store');
    Route::patch('/admin/Student/{student}','StudentController@edit');
    Route::put('/admin/Student/{student}','StudentController@update');

    //Student Indentity Card
    Route::get('/admin/IdentityCard','StudentController@identity_card');
    Route::post('/admin/IdentityCard','StudentController@find_identity_card');


    //Student Attendance
    Route::get('/admin/Attendance','AttendanceController@show');
    Route::post('/admin/Attendance','AttendanceController@index');

    Route::get('/admin/AttendanceSMS','AttendanceController@sms');
    Route::get('/admin/AttendanceDetailReport','AttendanceController@detail_report');
    Route::post('/admin/AttendanceDetailReport','AttendanceController@detail_report_show');
    Route::get('/admin/AttendanceReport','AttendanceController@report');
    
    Route::post('/admin/AttendanceSubmit','AttendanceController@submit');
    
     // SMS
     Route::get('/admin/SMSTemplate','SMS@template');
     Route::post('/admin/SMSTemplate','SMS@template_store');
     Route::delete('/admin/SMSTemplate/{smstemp}','SMS@template_delete');
     Route::get('/admin/StudentSMS','SMS@student');
     Route::post('/admin/StudentSMS','SMS@student_sms_add');
     Route::get('/admin/StaffSMS','SMS@staff');
     Route::get('/admin/BirthdaySMS','SMS@birthday');
     Route::get('/admin/OtherSMS','SMS@other'); 
     Route::get('/admin/ShowSMS','SMS@show');
     Route::get('/admin/SendSMS','SMS@send');
     Route::get('/admin/StudentSMSReport','SMS@student_report');
     Route::get('/admin/StaffSMSReport','SMS@staff_report');
     Route::get('/admin/OtherSMSReport','SMS@other_report');
    
     //Fee
     Route::get('/admin/FeesMaster','Fee@master');
     Route::post('/admin/FeesMaster','Fee@master_add');
     Route::delete('/admin/FeesMaster/{fee}','Fee@master_remove');
     Route::get('/admin/FeesSetting','Fee@setting');
     Route::get('/admin/FeesMapping','Fee@mapping');
     Route::post('/admin/FeesMapping','Fee@mapping_add');
     Route::delete('/admin/FeesMapping/{feemap}','Fee@mapping_remove');
     Route::get('/admin/FeesReciep','Fee@reciep');
     Route::get('/admin/PaidFeesReport','Fee@paid_report');
     Route::get('/admin/UnpaidFeesReport','Fee@unpaid_report');
    
    // // Examination
     Route::get('/admin/ExaminationMaster','Exam@master');
     Route::post('/admin/ExaminationMaster','Exam@master_add');
     Route::delete('/admin/ExaminationMaster/{exam}','Exam@master_remove');
     Route::get('/admin/MarksMaster','Exam@marks_master');
     Route::post('/admin/MarksMaster','Exam@marks_master_add');
     Route::delete('/admin/MarksMaster/{mm}','Exam@marks_master_remove');
     Route::get('/admin/MarksEntry','Exam@marks_entry');
     Route::post('/admin/MarksEntry','Exam@marks_entry_search');
     Route::post('/admin/MarksStore','Exam@marks_store');
     Route::get('/admin/GradeMaster','Exam@grade_master');
     Route::post('/admin/GradeMaster','Exam@grade_master_add');
     Route::delete('/admin/GradeMaster/{grade}','Exam@grade_master_remove');
     Route::get('/admin/ExaminationReportCard','Exam@report_card');
     Route::get('/admin/ExaminationReport','Exam@report');




    //School Session Routes
    Route::get('/admin/Session','SchoolSessionController@index');
    Route::post('/admin/Session','SchoolSessionController@store');
    Route::delete('/admin/Session/{schoolSession}','SchoolSessionController@destroy');

    //School State Route

    Route::get('/admin/State','SchoolStateController@index');
    Route::post('/admin/State','SchoolStateController@store');
    Route::patch('/admin/State/{schoolState}','SchoolStateController@edit');
    Route::put('/admin/State/{schoolState}','SchoolStateController@update');
    Route::delete('/admin/State/{schoolState}','SchoolStateController@destroy');

    //School Stream Route

    Route::get('/admin/Stream','SchoolStreamController@index');
    Route::post('/admin/Stream','SchoolStreamController@store');
    Route::patch('/admin/Stream/{schoolStream}','SchoolStreamController@edit');
    Route::put('/admin/Stream/{schoolStream}','SchoolStreamController@update');
    Route::delete('/admin/Stream/{schoolStream}','SchoolStreamController@destroy');

    //School City Route

    Route::get('/admin/City','SchoolCityController@index');
    Route::post('/admin/City','SchoolCityController@store');
    Route::patch('/admin/City/{schoolCity}','SchoolCityController@edit');
    Route::put('/admin/City/{schoolCity}','SchoolCityController@update');
    Route::delete('/admin/City/{schoolCity}','SchoolCityController@destroy');

    //School Religion Route

    Route::get('/admin/Religion','SchoolReligionController@index');
    Route::post('/admin/Religion','SchoolReligionController@store');
    Route::patch('/admin/Religion/{schoolReligion}','SchoolReligionController@edit');
    Route::put('/admin/Religion/{schoolReligion}','SchoolReligionController@update');
    Route::delete('/admin/Religion/{schoolReligion}','SchoolReligionController@destroy');

    //School Category Route
    Route::get('/admin/Category','SchoolCategoryController@index');
    Route::post('/admin/Category','SchoolCategoryController@store');
    Route::patch('/admin/Category/{schoolCategory}','SchoolCategoryController@edit');
    Route::put('/admin/Category/{schoolCategory}','SchoolCategoryController@update');
    Route::delete('/admin/Category/{schoolCategory}','SchoolCategoryController@destroy');

//School Class Route
    Route::get('/admin/Class','SchoolClassController@index');
    Route::post('/admin/Class','SchoolClassController@store');
    Route::patch('/admin/Class/{schoolClass}','SchoolClassController@edit');
    Route::put('/admin/Class/{schoolClass}','SchoolClassController@update');
    Route::delete('/admin/Class/{schoolClass}','SchoolClassController@destroy');

 //School Section Route
    Route::get('/admin/_Section','SchoolSectionController@index');
    Route::post('/admin/_Section','SchoolSectionController@store');
    Route::patch('/admin/_Section/{schoolSection}','SchoolSectionController@edit');
    Route::put('/admin/_Section/{schoolSection}','SchoolSectionController@update');
    Route::delete('/admin/_Section/{schoolSection}','SchoolSectionController@destroy');

 //School Subject Type Route
    Route::get('/admin/SubjectType','SchoolSubjectTypeController@index');
    Route::post('/admin/SubjectType','SchoolSubjectTypeController@store');
    Route::patch('/admin/SubjectType/{schoolSubjectType}','SchoolSubjectTypeController@edit');
    Route::put('/admin/SubjectType/{schoolSubjectType}','SchoolSubjectTypeController@update');
    Route::delete('/admin/SubjectType/{schoolSubjectType}','SchoolSubjectTypeController@destroy');   

  //School Subject Route
  Route::get('/admin/Subject','SchoolSubjectController@index');
  Route::post('/admin/Subject','SchoolSubjectController@store');
  Route::patch('/admin/Subject/{schoolSubject}','SchoolSubjectController@edit');
  Route::put('/admin/Subject/{schoolSubject}','SchoolSubjectController@update');
  Route::delete('/admin/Subject/{schoolSubject}','SchoolSubjectController@destroy');   
    
   Route::get('/admin','Controller@admin');
   Route::get('/admin/ClassMapping','Controller@classmapping');
   Route::post('/admin/ClassMapping','Controller@classmappingchange');

   Route::get('/admin/SubjectMapping','Controller@subjectmapping');
   Route::post('/admin/SubjectMapping','Controller@subjectmappingchange');


   Route::get('/admin/Birthday','BirthdayController@index');
   Route::post('/admin/Birthday','BirthdayController@store');
   Route::delete('/admin/Birthday/{birthday}','BirthdayController@destroy');
    
   Route::get('/admin/Gallery','GalleryController@index');
   Route::post('/admin/Gallery','GalleryController@store');
   Route::put('/admin/Gallery/{gallery}','GalleryController@update');
   
   Route::patch('/admin/Gallery/{gallery}','GalleryController@edit');
   Route::delete('/admin/Gallery/{gallery}','GalleryController@destroy');
   
   Route::get('/admin/News','NewsController@index');
   Route::post('/admin/News','NewsController@store');
   Route::delete('/admin/News/{news}','NewsCotroller@destroy');
   

   Route::get('/admin/Menu','MenuController@index');
   Route::post('/admin/Menu','MenuController@store');
   Route::put('/admin/Menu/{menu}','MenuController@update');
   Route::patch('/admin/Menu/{menu}','MenuController@edit');
   Route::delete('/admin/Menu/{menu}','MenuController@destroy');
   
   Route::get('/admin/Page','PageController@index');
   Route::put('/admin/Page/{page}','PageController@update');
   Route::patch('/admin/Page/{page}','PageController@edit');

   Route::put('/admin/Section/{section}','SectionController@update');
   Route::patch('/admin/Section/{section}','SectionController@edit');
   Route::delete('/admin/Section/{section}','SectionController@destroy');
   
   
    Route::get('/admin/Topper','TopperController@index');
    Route::post('/admin/Topper','TopperController@store');
    Route::delete('/admin/Topper/{topper}','TopperController@destroy');
    
    Route::get('/admin/Download','DownloadController@index');
    Route::post('/admin/Download','DownloadController@store');
    Route::delete('/admin/Download/{download}','DownloadController@destroy');
    
    Route::get('/admin/Photo','PhotoController@index');
    Route::post('/admin/Photo','PhotoController@store');
    Route::delete('/admin/Photo/{photo}','PhotoController@destroy');
    
    Route::get('/admin/Banner','BannerController@index');
    Route::post('/admin/Banner','BannerController@store');
    Route::delete('/admin/Banner/{banner}','BannerController@destroy');
    
    Route::delete('/admin/User/{user}','Controller@deleteUser');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

