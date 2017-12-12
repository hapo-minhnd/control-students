<?php

namespace App\Http\Controllers\student;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
class StudentController extends Controller
{
    public function Admin()
    {
        return view('registration.create_admin');
    }

    public function home()
    {
        return view('home');
    }

    public function info()
    {
        {
            return view('info_member');
        }
    }

    public function login()
    {
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

    public function postLogin(LoginPost $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            $request->session()->put('user', 'admin');
            return redirect()->intended('admin/home');
        } else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function logOut_Admin()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function store(Request $request)
    {


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Admin::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/welcome');
    }

}
