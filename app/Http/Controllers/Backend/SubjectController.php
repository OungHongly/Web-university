<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Models\Exam;

class SubjectController extends Controller
{
    /* ---------- admin ----------*/
    public function index(){
        return view('backend/admin/subject.index');
    }


    /* ---------- student ----------*/
    public function indexStudent(){
        return view ('backend/student/subject.index');
    }


    /* ---------- Professor ----------*/

    public function subjectProgress(){
        return view ('backend/professor/SubjectProgress.index');
    }

    public function lecture(){
        return view ('backend/professor/Lecture.index');
    }


}
