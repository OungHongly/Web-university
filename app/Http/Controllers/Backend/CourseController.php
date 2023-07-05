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
    // In your controller
    // In your controller
    public function updateCourse(Request $request, $id){
        // Validate the input data
        $request->validate([
            'course_id' => 'required',
            'course_name' => 'required'
        ]);

        // Update the course fields using the DB facade
        DB::table('courses')->where('course_id', $id)->update([
            'course_id' => $request->input('course_id'),
            'course_name' => $request->input('course_name')
        ]);

        // Redirect back with a success message
        return redirect('/course')->with('Success', 'Course is updated!');
    }



    public function deleteCourse($id){
        // Assuming you have a model called Post
        // $post = Post::find($id); // Find the post by id
        // $post->delete(); // Delete the post

        // DB::delete('DELETE from courses where course_id = ?', [$id]);
        DB::table('courses')->where('course_id', $id)->delete(); // Delete the post by id
        return redirect('/course')->with('Success', 'Course is deleted!');
    }
    
}
