<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use DB;

class ProfessorController extends Controller
{
    public function index(){
        //$teacher_arr = DB::table('users')->get();
        //dd($teacher_arr);
        $professor = DB::select('SELECT * from users where role_id=7'); 
        return view('backend/admin/Professor.index',['users' => $professor]);
    }
}
