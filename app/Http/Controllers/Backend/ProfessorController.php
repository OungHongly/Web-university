<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
{
    public function index(){
        //$teacher_arr = DB::table('users')->get();
        //dd($teacher_arr);
        $professor = DB::select('select * FROM users u INNER JOIN roles r ON u.role_id=r.role_id WHERE role_type=\'teacher\'');
        return view('backend/admin/Professor.index',['users' => $professor]);
    }
    public function addProfessor(Request $request){
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
        #User::create([
        DB::table('users')->insert([
            'user_id' => null,
            'first_name'=> $data['firstname'],
            'last_name'=> $data['lastname'],
            'username'=> $data['username'],
            'password'=> Hash::make($data['password']),
            'gender'=> 'male',
            'phoneNumber'=> $data['phoneNumber'],
            'email'=> $data['email'],
            'role_id'=> 7
        ]);
        return redirect()->route('addProfessor')->withSuccess('Teacher added');
    }
}
