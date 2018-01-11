<?php

namespace App\Http\Controllers\teacher;

use App\Http\Requests\LoginStudent;
use App\Http\Requests\LoginTeacher;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
class TeacherController extends Controller
{

    public function homeTeacher()
    {
        return view('student.teacher_home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info()
    {
        {
            return view('info_member');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        {
            return view('teacher.login');
        }
    }

    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        return $this->middleware('guest');
    }

    /**
     * @return mixed
     */
    protected function guard()
    {
        return Auth::guard('teacher');
    }

    /**
     * @param LoginPost $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function LoginTeacher(LoginTeacher $request)
    {
        $code_teacher = $request->input('code_teacher');
        $password = $request->input('password');
        if (Auth::guard('teacher')->attempt(['code_teacher' => $code_teacher, 'password' => $password, 'active' => 1])) {
            dd(1);
            return redirect()->intended('teacher/home');
        }
        else if (Auth::guard('teacher')->attempt(['code_teacher' => $code_teacher, 'password' => $password])) {
            dd('pls check mail');
        }
        else {
            return redirect()->back()->withErrors(['errorlogin' => trans('customer.error.login')]);
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function store(Request $request)
    {


        /*$this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);*/
        $user = Admin::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/welcome');
    }
    public function verify($token)
    {
        Teacher::where('email_token', $token)->firstOrFail()->verified();
        return redirect()->route('login_teacher')->with('success', 'Your account has been activated');
    }
}
