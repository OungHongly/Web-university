<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notices;

class DashboardController extends Controller
{
    /* ----- Admin ------*/
    public function index(){
        $notice = Notices::all();
        return view('backend/admin/dashboard.index', ['notices'=> $notice]);
    }



    /* ----- Student ------*/
    public function indexStudent(){
        return view('backend.Student.Dashboard.index');
    }


    /* ----- Teacher ------*/
    public function indexTeacher(){
        return view('backend.Professor.Dashboard.index');
    }

}
