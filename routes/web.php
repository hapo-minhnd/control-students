<?php
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@login')->name('login_Admin');
    Route::post('/login', 'AdminController@postlogin');
    Route::get('/logout', 'AdminController@logoutAdmin')->name('log_Out_Admin');
    Route::group(['middleware' => 'admin', 'prefix' => 'home'], function () {
        Route::get('/update-score', 'ManageStudentController@indexPoint')->name('update_score');
        Route::get('/', 'AdminController@home')->name('homeAdmin');
        Route::get('/info', 'ManageStudentController@index')->name('info_Member');
        Route::get('/info/sreach', 'ManageStudentController@index')->name('sreach_student');
        Route::put('/info/{id}', 'ManageStudentController@update')->name('update_student');
        Route::get('/update-info', 'AdminController@updateInfo')->name('update_info_Member');
        Route::get('/update-score/search', 'ManageStudentController@indexPoint')->name('sreach_score');
        Route::put('/update-score/{id}', 'ManageStudentController@updatePoint')->name('update_point');
        Route::post('/update-score', 'ManageStudentController@storePoint')->name('create_point');
        Route::get('/create/student', 'ManageStudentController@view')->name('get_create_student');
        Route::get('/create/teacher', 'ManageTeacherController@view')->name('get_create_teacher');
        Route::post('/create/teacher', 'ManageTeacherController@store')->name('create_teacher');
        Route::post('/create/student', 'ManageStudentController@store')->name('create_student');
        Route::get('/update-class', 'ClassController@index')->name('update_class');
        Route::put('/update-class/{id}', 'ClassController@Update')->name('update_class_admin');
        Route::post('/create/class', 'ClassController@store')->name('create_class');
        Route::get('/check/point', 'AdminController@indexPick')->name('admin_check_point');
        Route::get('/check/point/search', 'AdminController@searchPoint')->name('search_statistic_score');
        Route::get('/check/point/{id}', 'ClassController@pickClass')->name('pick_class_point');

    });
});
Route::group(['namespace' => 'Student', 'prefix' => 'student'], function (){
    Route::get('/login', 'StudentController@login')->name('login_Student');
    Route::post('/login', 'StudentController@LoginStudent')->name('post_student');
    Route::get('/logout', 'StudentController@LogOutstudent')->name('log_Out_Student');
    Route::get('verify/{token}', 'StudentController@verify')->name('student.verify');
    Route::group(['middleware' => 'student', 'prefix' => 'home'], function () {
        Route::get('/', 'StudentController@homeStudent')->name('home_student');
        Route::get('/pick-semester', 'StudentController@indexSemester')->name('index_semester_student');
        Route::get('/pick-semester/{id}', 'StudentController@pickSemester')->name('pick_semester_student');
        Route::put('/update-class/{id}', 'StudentController@UpdateClass')->name('update_class_student');
    });
});
Route::group(['namespace' => 'Teacher', 'prefix' => 'teacher'], function (){
    Route::get('/login', 'TeacherController@login')->name('login_teacher');
    Route::post('/login', 'TeacherController@LoginTeacher')->name('post_teacher');
    Route::get('/logout', 'TeacherController@LogOutTeacher')->name('log_out_teacher');
    Route::get('verify/{token}', 'TeacherController@verify')->name('teacher.verify');
    Route::group(['middleware' => 'teacher', 'prefix' => 'home'], function () {
        Route::get('/', 'TeacherController@homeTeacher')->name('home_teacher');
        Route::get('/update/score', 'TeacherController@indexPick')->name('teacher_update_score');
        Route::get('/info/{id}', 'TeacherController@pickClass')->name('pick_class');
        Route::put('/update-score/{id}', 'TeacherController@UpdatePoint')->name('update_point_teacher');
        Route::get('/update-class', 'TeacherController@indexClass')->name('teacher_class');
        Route::put('/update-class/{id}', 'TeacherController@UpdateClass')->name('update_class_teacher');
        Route::get('/pick-semester', 'TeacherController@indexSemester')->name('pick_semester');
        Route::get('/pick-semester/{id}', 'TeacherController@pickSemester')->name('pick_semester_teacher');
    });
});
