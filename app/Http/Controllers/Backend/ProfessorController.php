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
        $professor = DB::select('select * FROM users u INNER JOIN roles r ON u.role_id=r.role_id WHERE role_type=\'teacher\''); 
        return view('backend/admin/Professor.index',['users' => $professor]);
    }
    public function add(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'password'=>'required',
            'rdfemale'=>'required',
            'rdmale'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required'
        ]);
        $data = $request->all();
        Teacher::create([
            'first_name'=> $data['firstname'],
            'last_name'=> $data['lastname'],
            'username'=> $data['username'],
            'password'=> $data['password'],
            'gender'=> $data['rdmale'],
            'phoneNumber'=> $data['phoneNumber'],
            'email'=> $data['email'],
        ]);
        return view('backend/admin/Professor.index',['users'=>$professor])->with('Success','Teacher added');
    }
}       
