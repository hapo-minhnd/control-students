<?php
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@login')->name('login_Admin');
    Route::post('/login', 'AdminController@postlogin');
    Route::get('/logout', 'AdminController@logoutAdmin')->name('log_Out_Admin');
    Route::group(['middleware' => 'admin', 'prefix' => 'home'], function () {
        Route::get('/update_score', 'ManageStudentController@indexPoint')->name('update_score');
        Route::get('/', 'AdminController@home')->name('homeAdmin');
        Route::get('/info', 'ManageStudentController@index')->name('info_Member');
        Route::get('/info/sreach', 'ManageStudentController@index')->name('sreach_student');
        Route::put('/info/{id}', 'ManageStudentController@updateStudent')->name('update_student');
        Route::get('/update_info', 'AdminController@updateInfo')->name('update_info_Member');
        Route::get('/update_score/sreach', 'ManageStudentController@indexPoint')->name('sreach_score');
        Route::put('/update_score/{id}', 'ManageStudentController@updatePoint')->name('update_point');
        Route::post('/update_score', 'ManageStudentController@storePoint')->name('create_point');
        Route::get('/create/student', 'ManageStudentController@view')->name('get_create_student');
        Route::get('/create/teacher', 'ManageTeacherController@view')->name('get_create_teacher');
        Route::post('/create/teacher', 'ManageTeacherController@store')->name('create_teacher');
        Route::post('/create/student', 'ManageStudentController@store')->name('create_student');
        Route::get('/update_class', 'ClassController@index')->name('update_class');
        Route::post('/update_class/{id}', 'ClassController@destroy')->name('destroy_class_admin');
        Route::put('/update_class/{id}', 'ClassController@Update')->name('update_class_admin');
        Route::post('/create/class', 'ClassController@store')->name('create_class');
        Route::get('/check_point', 'AdminController@indexPick')->name('admin_check_point');
        Route::get('/check_point/search', 'AdminController@searchPoint')->name('search_statistic_score');
        Route::get('/check_point/{id}', 'ClassController@pickClass')->name('pick_class_point');

    });
});
Route::group(['namespace' => 'student', 'prefix' => 'student'], function (){
    Route::get('/login', 'StudentController@login')->name('login_Student');
    Route::post('/login', 'StudentController@LoginStudent')->name('post_student');
    Route::get('/logout', 'StudentController@LogOutstudent')->name('log_Out_Student');
    //Route::get('student/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
    Route::get('verify/{token}', 'StudentController@verify')->name('student.verify');
    Route::group(['middleware' => 'student', 'prefix' => 'home'], function () {
        Route::get('/', 'StudentController@homeStudent')->name('home_student');
        Route::get('/pick_semester', 'StudentController@indexSemester')->name('index_semester_student');
        Route::get('/pick_semester/{id}', 'StudentController@pickSemester')->name('pick_semester_student');
        Route::put('/update_class/{id}', 'StudentController@UpdateClass')->name('update_class_student');
    });
});
Route::group(['namespace' => 'teacher', 'prefix' => 'teacher'], function (){
    Route::get('/login', 'TeacherController@login')->name('login_teacher');
    Route::post('/login', 'TeacherController@LoginTeacher')->name('post_teacher');
    Route::get('/logout', 'TeacherController@LogOutTeacher')->name('log_out_teacher');
    //Route::get('student/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
    Route::get('verify/{token}', 'TeacherController@verify')->name('teacher.verify');
    Route::group(['middleware' => 'teacher', 'prefix' => 'home'], function () {
        Route::get('/', 'TeacherController@homeTeacher')->name('home_teacher');
        Route::get('/update_score', 'TeacherController@indexPick')->name('teacher_update_score');
        Route::get('/info/{id}', 'TeacherController@pickClass')->name('pick_class');
        Route::put('/update_score/{id}', 'TeacherController@UpdatePoint')->name('update_point_teacher');
        Route::get('/update_class', 'TeacherController@indexClass')->name('teacher_class');
        Route::put('/update_class/{id}', 'TeacherController@UpdateClass')->name('update_class_teacher');
        Route::get('/pick_semester', 'TeacherController@indexSemester')->name('pick_semester');
        Route::get('/pick_semester/{id}', 'TeacherController@pickSemester')->name('pick_semester_teacher');
    });
});
