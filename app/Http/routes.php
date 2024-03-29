<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', [ 'uses' => 'Auth\AuthController@getLogout', 'as' => 'logout' ]);

Route::get('/profile',"HomeController@index");

/**edit applicant details**/
//load edit page

Route::get('/edit', "EditApplicantController@index");

Route::post('/edits', "EditApplicantController@update_user");

Route::get('/test', function () {

      return redirect('edit')->with('users');

});

//update page using ajax

Route::get("/updateprof","EditApplicantController@update");

//confirm applicant slip no

Route::get("/addslip","EditApplicantController@add_slip");


/* exam application*/

Route::get('/exam', function () {
    return view('inner/examapp');
});

Route::get('/exam2', function () {
    return view('inner/examapp2');
});




Route::group(['middlewareGroups'=>'web'],function(){
  Route::auth();

});



/* testing */

Route::get('/student', function () {
    return view('student');
});

Route::get("create1","testing@index");

Route::post("store","testing@store");



/*Route::get('/home', 'HomeController@index');*/



Route::post('user/profile', function () {
    // Update the user's profile...

    return redirect('dashboard')->with('status', 'Profile updated!');
});



/*
-------------------------------------------------------------------------------
|   pdf routes
|----------------------------------------------------------------------------
 */

//get application
Route::get('/getApp','PDFController@getApp')->middleware(['auth', 'applicant']);

//get Voucher
Route::get('/getVouch','PDFController@getVouch')->middleware(['auth','applicant']);

Route::get('/getExamApp','PDFController@getExamApp')->middleware('student');

Route::get('/manual','PDFController@loadusermanual');


Route::get('userDetails','PDFController@getUserDetails');

/*
|-------------------------------------------------------------------------------
|dashboard Routes
|----------------------------------------------------------------------------
*/

/* student dash board */
Route::get('/dashboard','StudentDashboardController@index');

/*admin dashboard*/
Route::get('/admindash','AdminDashboardController@index');

/*SAR dashboard */
Route::get('/sardash','SARDashboardController@index');

/*coordinator*/
Route::get('/coorddash','CoordDashboardController@index');

/*director*/

Route::get('/dirdash','DirDashboardController@index');

Route::get('/institution_rating', function () {
    return view('inner/student/institution_rating');
});

/*
|||||||||||||||||||||||||||||Internal system ||||||||||||||||||||||||||||||||||||||||||||
*/

//student|||||||||||||||||||||


//gpa summary
Route::get('/gpasummery','StudentgpaController@index');

Route::get('/sub_results','SubresultsController@index');

Route::get('/st_exam', function () {
    return view('inner/student/exam');
});

Route::get('/exam_payment', function () {
    return view('inner/student/exam_payment');
});

Route::get('/exam_admission', function () {
    return view('inner/student/exam_addmission');
});

Route::get('/results', function () {
    return view('inner/student/results');
});

Route::get('idCard', function () {
    return view('inner/student/idCard');
});

//real time chat messages ui
Route::get('/messages', function () {
    return view('inner/student/messages');
});

Route::get('/notification_add','NotificationController@notification_add');


//send message
Route::post('/sendMessage','StudentDashboardController@sendMessage');

Route::post('/isTyping','StudentDashboardController@isTyping');

Route::post('/notTyping','StudentDashboardController@notTyping');

Route::post('/retrieveChatMessages','StudentDashboardController@retrieveChatMessages');

Route::post('/retrieveTypingStatus','StudentDashboardController@retrieveTypingStatus');


//request new id
Route::get('/idRequest','StudentDashboardController@id_Request');



//coordinator||||||||||||||||||||||

Route::get('/uploadTuto', function () {
    return view('inner/coordinator/uploadTuto');
});

Route::get('/accounting', function () {
    return view('inner/coordinator/accounting');
});

Route::get('/filter', function () {
    return view('inner/coordinator/filter');
});

Route::get('/ApplicantFilter','FilterController@filter');

Route::get('/appDetails','FilterController@appDetails');

Route::post('/addcourse','CourseController@addCourse');

Route::get('/loadCourses','CourseController@loadCourse');

//SAR

Route::get('/sar', function () {
    return view('inner/SAR/examHall');
});

Route::get('/letters', function () {
    return view('inner/SAR/letters');
});

Route::get('resultUpload','ResultsUploadController@index');


Route::get('create_exam','examController@examCreateView');

Route::get('load_exams','examController@loadExams');

Route::get('exam_add','examController@addExam');

Route::post('imports','ExcelController@postImport');

//coordinator

Route::get('/editfees', function () {
    return view('inner/coordinator/editfees');
});

Route::get('/courses', function () {
    return view('inner/coordinator/courses');
});


Route::post('/emailval','validateController@validateEmail');

Route::get('/feeedit','FeesController@editFee');

// admin

Route::get('/account','AdminDashboardController@editAccount');

Route::get('/manage_users','manageUser@index');

Route::post('/newUser','manageUser@newUser');

Route::get('/getUpdate','manageUser@getUpdate');

Route::put('/newUser','manageUser@newUpdate');

Route::post('/deleteUser','manageUser@deleteUser');


// Route::get('/manage_users', function () {
//     return view('inner/admin/manage_users');
// });
// Route::post('/addUser','manageUser@store');
//
// Route::get("/create",'manageUser@index');
//
// Route::get('/userfilter','manageUser@filterUser');
//
// Route::post('/editUserData','manageUser@update');


//-------------------------------------------------------------
// internal setting routes
//-------------------------------------------------------------

//student

Route::post('/examSubjects','examController@getSubjects');
