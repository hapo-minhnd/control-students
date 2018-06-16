<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\LoginStudent;
use App\Models\Admin;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
use Illuminate\Support\Facades\App;
use App\Http\Requests\LoginTeacher;
use App\Models\PointSubject;
use App\Models\Teacher;
use App\Http\Requests\UpdatePoint;
use App\Models\ClassStudent;

class StudentController extends Controller
{

  public function __construct()
  {
    return $this->middleware('guest');
  }

  public function homeStudent()
  {
    return view('student.student_home');
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
      return view('student.login');
    }
  }

  /**
   * StudentController constructor.
   */

  /**
   * @return mixed
   */
  protected function guard()
  {
    return Auth::guard('student');
  }

  /**
   * @param LoginPost $request
   * @return $this|\Illuminate\Http\RedirectResponse
   */
  public function LoginStudent(LoginStudent $request)
  {

    $code_student = $request->input('code_student');
    $password = $request->input('password');
    if (Auth::guard('student')->attempt(['code_student' => $code_student, 'password' => $password, 'active' => 1])) {
      return redirect()->intended('student/home');
    } else {
      if (Auth::guard('student')->attempt(['code_student' => $code_student, 'password' => $password])) {
        dd('pls check mail');
      } else {
        return redirect()->back()->withErrors(['errorlogin' => trans('customer.error.login')]);
      }
    }
  }

  /**
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function logoutStudent()
  {
    Auth::guard('student')->logout();
    return redirect('student/login');
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
    Student::where('email_token', $token)->firstOrFail()->verified();
    return redirect()->route('login_Student')->with('success', 'Your account has been activated');
  }

  public function indexSemester(Request $request)
  {
    $classes = ClassStudent::select('semester')->groupBy('semester')->get();
    return view('student.pick_semester', ['classes' => $classes]);
  }

  public function pickSemester(Request $request)
  {
    $Year = date('Y');
    $Month = date('m');
    if ($Month <= 01) {
      $Month = 'A';
      $semester = $Year . $Month;
    } elseif ($Month <= 07 && $Month >= 06) {
      $Month = 'B';
      $semester = $Year . $Month;
    } else {
      $semester = '';
    }
    /*dd($semester);*/
    $ClassStudents = ClassStudent::where('semester', $semester)->get();
    return view('student.update_class', ['ClassStudents' => $ClassStudents, 'day' => $semester]);
  }

  public function UpdateClass(Request $request, $id)
  {
    $code_student = auth()->guard('student')->user()->code_student;
    $check = PointSubject::where('code_student', $code_student)->where('code_class', $id)->get();
    if ($check->count() === 0) {
      $pointSubject = new PointSubject();
      $pointSubject->code_student = $request->student;
      $pointSubject->code_class = $id;
      $pointSubject->save();
      return redirect()->back();
    } else {
      $pointSubject = PointSubject::findOrFail($check->first()->id);
      $pointSubject->delete();
      return redirect()->back();
    }
  }

  public function IndexPoint()
  {
    $code_student = auth()->guard('student')->user()->code_student;
    /*$pointSubjects = PointSubject::join('classes', 'classes.code_class', '=' ,'subject_point.code_class')
        ->select('code_student', 'semester', DB::raw('avg(point) as avgpoint'), DB::raw('count(point) as die'))
        ->where('code_student', $codeSutdent)
        ->groupBy('code_student', 'semester')
        ->get();*/
    $pointSubjects = PointSubject::join('classes', 'classes.code_class', '=', 'subject_point.code_class')
        ->select('code_student', 'name_class', 'code_subject', 'subject_point.code_class', 'point')
        ->where('code_student', $code_student)->where('point', '!=', '')->get();
    return view('student.index_point', ['pointSubjects' => $pointSubjects]);
  }
}
