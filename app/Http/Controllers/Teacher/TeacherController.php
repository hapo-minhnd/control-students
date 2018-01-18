<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\LoginStudent;
use App\Http\Requests\LoginTeacher;
use App\Models\Admin;
use App\Models\PointSubject;
use App\Models\Student;
use App\Models\Teacher;
use App\Http\Requests\UpdatePoint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
use App\Models\ClassStudent;
class TeacherController extends Controller
{

    public function homeTeacher()
    {
        return view('teacher.teacher_home');
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
    public function logoutTeacher()
    {
        Auth::guard('teacher')->logout();
        return redirect('teacher/login');
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
    public function pickClass(Request $request, $id){
        $pointSubjects =pointSubject::where('code_class', $id)->paginate(5);
        return view('teacher.update_score', ['pointSubjects' => $pointSubjects]);
    }
    public function indexPick(request $request){
        $code_teacher = auth()->guard('teacher')->user()->code_teacher;
        $classes = ClassStudent::where('code_teacher', $code_teacher)->get();
        return view('teacher.pick_class', ['classes' => $classes]);
    }
    public function indexUpPoint(request $request){
        $code_teacher = auth()->guard('teacher')->user()->code_teacher;
        $classes = ClassStudent::where('code_teacher', $code_teacher)->get();
        return view('teacher.update_score', ['classes' => $classes]);
    }
    public function UpdatePoint(request $request, $id) {
        $pointSubject = pointSubject::findOrFail($id);
        $pointSubject->point = $request->point;
        $pointSubject->save();
        return redirect()->back();
    }
    public function indexClass(request $request){
        $ClassStudents = ClassStudent::all();
        return view('teacher.update_class', ['ClassStudents' => $ClassStudents]);
    }
    public function updateClass(Request $request, $id){
        $classSubject = ClassStudent::findOrFail($id);
        $classSubject->code_teacher = $request->teacher;
        $classSubject->save();
        return redirect()->back();
    }
    public function indexSemester(Request $request){
        $classes = ClassStudent::select('semester')->groupBy('semester')->get();
        return view('teacher.pick_semester', ['classes' => $classes]);
    }
    public function pickSemester(Request $request, $id){
        $ClassStudents = ClassStudent::where('semester', $id)->get();
        return view('teacher.update_class', ['ClassStudents' => $ClassStudents]);
    }
}
