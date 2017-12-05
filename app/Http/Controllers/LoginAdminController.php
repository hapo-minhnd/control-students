<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Http\Requests\LoginPost;



class LoginAdminController extends Controller
{
    public function login(){
        {
            return view('login_admin');
        }
    }
    public function __construct()
    {
        return $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function postLogin(LoginPost $request) {

            $email = $request->input('email');
            $password = $request->input('password');
            if( Auth::guard('admin')->attempt(['email' => $email, 'password' =>$password])) {
                $request->session()->put('user', 'admin');
                return redirect()->intended('/home');
            }
            else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
    }
    public function logOut_Admin(){
        Auth::guard('admin')->logout();
        return redirect('login/admin');
    }
}
