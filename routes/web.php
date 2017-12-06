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
route::get('/check','AccountController@index');
Route::get('/login', 'AccountController@login')->name('login_Member');
Route::post('login','AccountController@postLogin');
Route::get('/login/admin', 'LoginAdminController@login')->name('login_Admin');
Route::post('login/admin','LoginAdminController@postlogin');
//route::post('login','AccountController@newAccount');
Route::get('/register', 'RegistrationController@create')->name('create_Member');
Route::post('register', 'RegistrationController@store');
Route::get('/home', function (){
    return view('home');
})->name('homeAdmin')->middleware('admin');
Route::get('/home_teacher', function (){
    return view('teacher_home');
})->name('homeMember')->middleware('member');

Route::get('/123','LoginAdminController@LogOut_Admin')->name('log_Out_Admin');
Route::get('/','AccountController@LogOut_Member')->name('log_Out_Member');
route::get('/homeMember/info', 'AccountController@info')->name('info_Member')->middleware('admin');
route::get('/homeMember/update_info', 'AccountController@updateInfo')->name('update_info_Member')->middleware('admin');
route::get('/homeMember/update_score', 'AccountController@updateScore')->name('update_score')->middleware('admin');



