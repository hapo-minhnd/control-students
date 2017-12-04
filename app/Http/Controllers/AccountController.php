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
}
