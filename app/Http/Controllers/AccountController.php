<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;


class AccountController extends Controller
{
    public function login(){
        {
            return view('login');
        }
    }
    public function info(){
        {
            return view('info_member');
        }
    }
    public function update_info(){
        {
            return view('update_info_member');
        }
    }
    public function update_score(){
        {
            return view('update_score');
        }
    }
    public function postLogin(Requests\LoginPost $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        if( Auth::attempt(['email' => $email, 'password' =>$password])) {
            return redirect()->intended('/home_teacher');
        }
        else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }
    public function logOut_Member(){
            Auth::logout();
            return redirect('/login');
    }
}
