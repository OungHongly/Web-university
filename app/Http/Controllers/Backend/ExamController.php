<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exams;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\DB;
use Illuminate\Dashboard\Eloquent\Model;


class ExamController extends Controller
{
    /* ---- admin --------*/
    public function index(){
        $exam = Exams::all();
        //$exam = DB::select('SELECT * FROM exam');
        return view('backend/Admin/Exam.index',['exams'=>$exam]);
    }

    public function addExam(Request $request){
        $request->validate([
            'paperCode' =>'required',
            'txtSubjectname'=>'required',
            'txtCoursename'=>'required',
            'txtDate'=>'required |date',
            'txtstartTime'=>'required',
            'txtendTime'=>'required',
            
        ]);

        $data = $request->all();
        Exams::create([
            'examid'    => null,
            'papercode' =>$data['paperCode'],
            'subject'   =>$data['txtSubjectname'],
            'course'    =>$data['txtCoursename'],
            'date'      =>$data['txtDate'],
            'starttime' =>$data['txtstartTime'],
            'endtime'   =>$data['txtendTime'],
        ]);
        //Exams::save();
        return redirect()->route('addExam')->withSuccess('Exam is created!');
    }

    public function editExam($id){
        $exams = Exam::select('select * from exam where id = ?',[$id]);
        #$notice = Notices::select($id);
        return view('backend/Admin/Exam.editExam', ['exam'=>$exam]);
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
