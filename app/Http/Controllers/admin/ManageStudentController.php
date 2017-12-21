<?php

namespace App\Http\Controllers\admin;

use App\Http\Models\PointSubject;
use App\Http\Requests\UpdatePoint;
use App\Http\Requests\StoreStudent;
use App\Http\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStudent;
use Illuminate\Http\Request;
use Auth;
class ManageStudentController extends Controller
{
    /**
     * ManageStudentController constructor.
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
        return Auth::guard('admin');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if($request->has('code_student')){
            $cs = $request->input('code_student');
            $students = Student::where('code_student' , 'like', "%{$cs}%")->orWhere('code_class' , 'like', "%{$cs}%")->paginate(5);
            return view('admin.info_member', ['students' => $students]);
        }
        else{
        $students = Student::paginate(5);
        return view('admin.info_member', ['students' => $students]);
        }
    }
    public function indexPoint(Request $request)
    {
        if(($request->input('code_student') != '') && ($request->input('semester') != '')){
            $cs = $request->input('code_student');
            $sm = $request->input('semester');
            $pointSubjects = \App\Http\Models\pointSubject::where('code_student' , 'like', "%{$cs}%")->Where('semester' , 'like', "%{$sm}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else if($request->input('code_student') != ''){
            $cs = $request->input('code_student');
            $pointSubjects = \App\Http\Models\pointSubject::where('code_student' , 'like', "%{$cs}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else if($request->input('semester') != ''){
            $sm = $request->input('semester');
            $pointSubjects = \App\Http\Models\pointSubject::Where('semester' , 'like', "%{$sm}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else{
            $pointSubjects = \App\Http\Models\pointSubject::paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
    }
/*
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
    }*/

    /*public function logOut_Admin()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }*/
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view('admin.create');
    }


    public function store(StoreStudent $request)
    {
        $user = Student::create($request->all());

        return redirect(route('homeAdmin'));
    }
    public function updateStudent(UpdateStudent $request, $id)
    {
            $student = Student::findOrFail($id);
            $student->code_student = $request->code_student;
            $student->name = $request->name;
            $student->year_of_birth = $request->year_of_birth;
            $student->address = $request->address;
            $student->code_class = $request->code_class;
            $student->save();
        return redirect(route('info_Member'));
    }
    public function storePoint(UpdatePoint $request)
    {
        $user = PointSubject::create($request->all());
        return redirect(route('update_score'));
    }
    public function updatePoint(UpdatePoint $request, $id)
    {
        $pointSubject = \App\Http\Models\pointSubject::findOrFail($id);
        $pointSubject->code_student = $request->code_student;
        $pointSubject->name = $request->name;
        $pointSubject->point = $request->point;
        $pointSubject->semester = $request->semester;
        $pointSubject->save();
        return redirect(route('update_score'));
    }
}
