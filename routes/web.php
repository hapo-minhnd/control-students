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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/teacher', function () {
    return view('teacher_home');
});
route::get('/check', 'AccountController@index');
Route::get('/login', 'AccountController@login')->name('login_Member');
Route::post('login', 'AccountController@postLogin');

Route::get('/register', 'RegistrationController@create')->name('create_Member');
Route::post('register', 'RegistrationController@store');
//Route::get('/home', function (){
//   return view('home');
//})->name('homeAdmin')->middleware('admin');
Route::get('/home_teacher', function () {
    return view('teacher_home');
})->name('homeMember')->middleware('member');

//Route::get('/logout/admin', 'admin/LoginAdminController@LogOut_Admin')->name('log_Out_Admin');
Route::get('/logout/member', 'AccountController@LogOut_Member')->name('log_Out_Member');
Route::get('/', 'AccountController@LogOut_Member')->name('log_Out_Member');
//route::get('/homeMember/info', 'AccountController@info')->name('info_Member')->middleware('admin');
//route::get('/homeMember/update_info', 'AccountController@updateInfo')->name('update_info_Member')->middleware('admin');
//route::get('/homeMember/update_score', 'AccountController@updateScore')->name('update_score')->middleware('admin');


Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@login')->name('login_Admin');
    Route::post('/login', 'AdminController@postlogin');
    Route::get('/logout', 'AdminController@logoutAdmin')->name('log_Out_Admin');
    Route::group(['middleware' => 'admin', 'prefix' => 'home'], function () {
        route::get('/', 'AdminController@home')->name('homeAdmin');
        route::get('/info', 'ManageStudentController@index')->name('info_Member');
        route::get('/info/sreach', 'ManageStudentController@index')->name('sreach_student');
        route::put('/info/{id}', 'ManageStudentController@updateStudent')->name('update_student');
        route::get('/update_info', 'AdminController@updateInfo')->name('update_info_Member');
        route::get('/update_score', 'ManageStudentController@indexPoint')->name('update_score');
        route::get('/update_score/sreach', 'ManageStudentController@indexPoint')->name('sreach_score');
        route::put('/update_score/{id}', 'ManageStudentController@updatePoint')->name('update_point');
        route::post('/update_score', 'ManageStudentController@storePoint')->name('create_point');
        route::get('/create/student', 'ManageStudentController@view')->name('get_create_student');
        route::post('/create/student', 'ManageStudentController@store')->name('create_student');
    });
});
Route::group(['namespace' => 'student', 'prefix' => 'student'], function (){
    Route::get('/login', 'StudentController@login')->name('login_Student');
    Route::post('/login', 'StudentController@postlogin');
    Route::get('/logout', 'StudentController@LogOut_Admin')->name('log_Out_Student');
});