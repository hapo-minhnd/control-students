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
Route::get('/login', 'AccountController@login');
Route::post('login','AccountController@postLogin');
Route::get('/login/admin', 'LoginAdminController@login');
Route::post('login/admin','LoginAdminController@postlogin');
//route::post('login','AccountController@newAccount');
Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('/home', function (){
    return view('home');
});
Route::get('/home_teacher', function (){
    return view('teacher_home');
});
