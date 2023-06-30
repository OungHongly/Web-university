<?php

namespace App\Http\Controllers\Backend;

use App\ExamInsert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use App\Models\Exam;

class ExamController extends Controller
{
    /* ---- admin --------*/
    public function index(){
        $exam = DB::select('SELECT * FROM exam');
        return view('backend/admin/exam.index',['exam'=>$exam]);
    }

    public function add(){
        return view('addExam');
    }

    public function insert(Request $request){
        $exam = new Exam();
        $exam->papercode = $request->input('papercode');
        $exam->subject = $request->input('subject');
        $exam->course = $request->input('course');
        $exam->date = $request->input('date');
        $exam->starttime = $request->input('starttime');
        $exam->endtime = $request->input('endtime');
        $exam->save();
        return redirect('backend/admin/exam.index')->with('status', "Insert Successfully");

    }



    /* ---- student --------*/
    public function indexStudent(){
        return view('backend/student/Exam.index');
    }

    public function result(){
        return view('backend/student/semester result.index');
    }

    /* ------ Professor --------*/
    public function examProfessor(){
        return view('backend/professor/exam.index');
    }
}
