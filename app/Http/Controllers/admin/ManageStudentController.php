<?php

namespace App\Http\Controllers\admin;

use App\Models\PointSubject;
use App\Http\Requests\UpdatePoint;
use App\Http\Requests\StoreStudent;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStudent;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailActiveStudent;

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
        /*dd( Auth::guard('admin')->user()->id);*/

        if(($request->has('code_student')) && ($request->has('code_class'))){
            $cs = $request->input('code_student');
            $sm = $request->input('code_class');
            $pointSubjects =PointSubject::where('code_student' , 'like', "%{$cs}%")->Where('code_class' , 'like', "%{$sm}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else if(($request->has('code_student'))){
            $cs = $request->input('code_student');
            $pointSubjects = PointSubject::where('code_student' , 'like', "%{$cs}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else if(($request->has('code_class'))){
            $sm = $request->input('code_class');
            $pointSubjects = PointSubject::Where('code_class' , 'like', "%{$sm}%")->paginate(5);
            return view('admin.update_score', ['pointSubjects' => $pointSubjects]);
        }
        else{
            $pointSubjects = PointSubject::paginate(5);
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
        $student = new Student();
        $student->code_student = $request->code_student;
        $student->password = bcrypt($request->password);
        $student->name = $request->name;
        $student->year_of_birth = $request->year_of_birth;
        $student->address = $request->address;
        $student->code_class = $request->code_class;
        $student->email = $request->email ;
        $student->email_token = str_random(20);
        $student->save();
        $email = new EmailActiveStudent($student);
        Mail::to($student)->send($email);
        return redirect()->route('homeAdmin');
    }
    public function update(UpdateStudent $request, $id)
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
        return redirect()->route('sreach_score');
    }
    public function updatePoint(UpdatePoint $request, $id)
    {
        $pointSubject = \App\Models\pointSubject::findOrFail($id);
        $pointSubject->code_student = $request->code_student;
        $pointSubject->code_class = $request->code_class;
        $pointSubject->point = $request->point;
        $pointSubject->save();
        return redirect()->back();
    }
    public function SendEmail(StoreStudent $request){
        $student = new Student();
        $email = new EmailActiveStudent($student);
        Mail::to($student)->send($email);
    }
}
