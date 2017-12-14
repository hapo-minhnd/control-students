<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreStudent;
use App\Http\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Auth;
class ManageStudentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function index(Request $request)
    {
        if($request->has('code_student')){
            $cs = $request->input('code_student');
            $students = student::where('code_student', 'like', "%{$cs}%")->paginate(5);
            return view('admin.info_member', ['students' => $students]);
        }
        else{
        $students = DB::table('student')->paginate(5);
        return view('admin.info_member', ['students' => $students]);
        }
    }
    public function sreach_student(request $request){

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
    public function view()
    {
        return view('admin.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreStudent $request)
    {
        //$this->validate(request(), [
           // 'code_student' =>'required|max:12',
            //'password' => 'required|min:8',
            //'name' => 'required|max:100',
            //'Year_of_birth' => 'required|max:100',
            //'address' => 'required|max:100',
            //'code_class' => 'required',
            //'email' => 'required|email',
        //]);
        //dd($request->all());
        $user = student::create($request->all());
        //auth()->login($user);
        return redirect()->route('homeAdmin');
    }
}
