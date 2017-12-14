<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreStudent;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
use Illuminate\Mail\Message;
use Illuminate\Support\MessageBag;

class AdminController extends Controller
{
    public function admin()
    {
        return view('registration.create_admin');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function info()
    {
        {
            return view('admin/info_member');
        }
    }

    public function updateInfo()
    {
        {
            return view('update_info_member');
        }
    }

    public function updateScore()
    {
        {
            return view('update_score');
        }
    }

    public function login()
    {
        {
            return view('admin.login_admin');
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

    /**
     * @param LoginPost $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginPost $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            $request->session()->put('user', 'admin');
            return redirect()->intended('admin/home');
        } else {
            return redirect()->back()->withErrors(['errorlogin' => trans('customer.error.login')]);
        }
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect('admin.login');
    }

    public function store(StoreStudent $request)
    {


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Admin::create(request(['name', 'email', 'password']));

        //auth()->login($user);

        return redirect()->to('welcome');
    }

}
