<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use DataTable;
use DB;
use App\Models\Course;

use function PHPUnit\Framework\returnSelf;

class CourseController extends Controller
{
    // public function _construct(){
    //     $this->middleware('auth');
    // }
    
    public function index(){
        // $course_arr = DB::table('course')->get();
        // dd($course_arr);
        $course =DB::select('SELECT * from courses');
        return view ('backend/admin/course.index',['courses'=>$course]);
    }

    // public function add(){
    //     // $course_arr = DB::table('course')->get();
    //     // dd($course_arr);
    //     $course =DB::select('INSERT INTO courses (course_id, course_name) VALUES (?, ?)');
    //     return view ('backend/admin/course.index',['courses'=>$course]);
    // }
    
    public function addCourse(Request $request){
        $request->validate([
            'txtcourse_id' => 'required',
            'txtcourse_name'  => 'required'
        ]);
        $data = $request->all();
        Course::create([
            'course_id'      =>  $data['txtcourse_id'],
            'course_name'  =>  $data['txtcourse_name']
        ]);
        return  redirect()->route('addCourse')->withSuccess('Add completed.');
    }

    public function deleteCourse($id){
        $data = Course::findOrFail($id);
        $data -> delete();
        return  redirect()->route('course')->withSuccess('Add completed.');
    }
    
}
