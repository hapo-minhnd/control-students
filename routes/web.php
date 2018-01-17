<?php
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@login')->name('login_Admin');
    Route::post('/login', 'AdminController@postlogin');
    Route::get('/logout', 'AdminController@logoutAdmin')->name('log_Out_Admin');
    Route::group(['middleware' => 'admin', 'prefix' => 'home'], function () {
        route::get('/update_score', 'ManageStudentController@indexPoint')->name('update_score');
        route::get('/', 'AdminController@home')->name('homeAdmin');
        route::get('/info', 'ManageStudentController@index')->name('info_Member');
        route::get('/info/sreach', 'ManageStudentController@index')->name('sreach_student');
        route::put('/info/{id}', 'ManageStudentController@updateStudent')->name('update_student');
        route::get('/update_info', 'AdminController@updateInfo')->name('update_info_Member');
        route::get('/update_score/sreach', 'ManageStudentController@indexPoint')->name('sreach_score');
        route::put('/update_score/{id}', 'ManageStudentController@updatePoint')->name('update_point');
        route::post('/update_score', 'ManageStudentController@storePoint')->name('create_point');
        route::get('/create/student', 'ManageStudentController@view')->name('get_create_student');
        route::get('/create/teacher', 'ManageTeacherController@view')->name('get_create_teacher');
        route::post('/create/teacher', 'ManageTeacherController@store')->name('create_teacher');
        route::post('/create/student', 'ManageStudentController@store')->name('create_student');
        route::get('/update_class', 'AdminController@indexClass')->name('update_class');
        route::put('/update_class/{id}', 'AdminController@UpdateClass')->name('update_class_admin');
        route::post('/create/class', 'AdminController@storeClass')->name('create_class');
        route::get('/check_point', 'AdminController@indexPick')->name('admin_check_point');
        route::get('/check_point/search', 'AdminController@searchPoint')->name('search_statistic_score');
        route::get('/check_point/{id}', 'AdminController@pickClass')->name('pick_class_point');

    });
});
Route::group(['namespace' => 'student', 'prefix' => 'student'], function (){
    Route::get('/login', 'StudentController@login')->name('login_Student');
    Route::post('/login', 'StudentController@LoginStudent')->name('post_student');
    Route::get('/logout', 'StudentController@LogOutAdmin')->name('log_Out_Student');
    //Route::get('student/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
    Route::get('verify/{token}', 'StudentController@verify')->name('student.verify');
    Route::group(['middleware' => 'student', 'prefix' => 'home'], function () {
        route::get('/', 'StudentController@homeStudent')->name('home_student');
    });
});
Route::group(['namespace' => 'teacher', 'prefix' => 'teacher'], function (){
    Route::get('/login', 'TeacherController@login')->name('login_teacher');
    Route::post('/login', 'TeacherController@LoginTeacher')->name('post_teacher');
    Route::get('/logout', 'TeacherController@LogOutAdmin')->name('log_out_teacher');
    //Route::get('student/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
    Route::get('verify/{token}', 'TeacherController@verify')->name('teacher.verify');
    Route::group(['middleware' => 'teacher', 'prefix' => 'home'], function () {
        route::get('/', 'TeacherController@homeTeacher')->name('home_teacher');
        route::get('/update_score', 'TeacherController@indexPick')->name('teacher_update_score');
        route::get('/info/{id}', 'TeacherController@pickClass')->name('pick_class');
        route::put('/update_score/{id}', 'TeacherController@UpdatePoint')->name('update_point_teacher');
        route::get('/update_class', 'TeacherController@indexClass')->name('teacher_class');
        route::put('/update_class/{id}', 'TeacherController@UpdateClass')->name('update_class_teacher');
    });
});
