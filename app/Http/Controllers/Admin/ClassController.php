<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreClass;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudent;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPost;
use Auth;
use App\Models\ClassStudent;
use App\Models\PointSubject;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Message;
use Illuminate\Support\MessageBag;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ClassStudents = ClassStudent::all();
        return view('admin.update_class', ['ClassStudents' => $ClassStudents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClass $request)
    {
        $classSubject = new ClassStudent();
        $classSubject->code_class = $request->code_class;
        $classSubject->name_class = $request->name_class;
        $classSubject->code_subject = $request->code_subject;
        $classSubject->code_teacher = $request->code_teacher;
        $classSubject->semester = $request->semester;
        $classSubject->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->delete === null) {
            $classSubject = ClassStudent::findOrFail($id);
            $classSubject->code_class = $request->code_class;
            $classSubject->name_class = $request->name_class;
            $classSubject->code_subject = $request->code_subject;
            $classSubject->code_teacher = $request->code_teacher;
            $classSubject->semester = $request->semester;
            $classSubject->save();
            return redirect()->back();
        }
        else{
            $ClassStudent = ClassStudent::findOrFail($id);
            $ClassStudent->delete();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function pickClass(Request $request, $id){
        $pointSubjects = PointSubject::join('classes', 'classes.code_class', '=' ,'subject_point.code_class')
            ->select('code_student', 'semester', DB::raw('avg(point) as point'))
            ->where('semester', $id)
            ->groupBy('code_student', 'semester')
            ->orderby('point', 'desc')
            ->get();
        return view('admin.statistic_score', ['pointSubjects' => $pointSubjects]);
    }
}
