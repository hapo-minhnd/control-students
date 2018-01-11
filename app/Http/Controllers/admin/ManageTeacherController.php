<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreTeacher;
use App\Mail\EmailActiveTeacher;
use App\Models\Admin;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginPost;
use Auth;
use Illuminate\Support\Facades\Mail;
class ManageTeacherController extends Controller
{
    public function view()
    {
        return view('admin.create_teacher');
    }
    public function store(StoreTeacher $request)
    {
        $teacher = new Teacher();
        $teacher->code_teacher = $request->code_teacher;
        $teacher->password = bcrypt($request->password);
        $teacher->name_teacher = $request->name;
        $teacher->gender = $request->gender;
        $teacher->telephone_number = $request->telephone;
        $teacher->email = $request->email ;
        $teacher->email_token = str_random(20);
        $teacher->save();
        $email = new EmailActiveTeacher($teacher);
        Mail::to($teacher)->send($email);
        return redirect(route('homeAdmin'));
    }
}
