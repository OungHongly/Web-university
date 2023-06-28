<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notices;
use Illuminate\Support\Facades\DB;
use Illuminate\Dashboard\Eloquent\Model;

class NoticeController extends Controller
{
    /* -------- admin -----------*/
    public function index(){
        $notice = Notices::all();
        #$notice = DB::select('select * from notices');
        return view('backend/Admin/Notice.index', ['notices'=> $notice]);
    }


    /* -------- student -----------*/
    public function indexStudent(){
        return view('backend/Student/Notice.index');
    }


    /* -------- teacher -----------*/
    public function indexTeacher(){
        return view ('backend/Professor/Notice.index');
    }

    /*public function fetch_all(){
        /*$notice = DB::table('notices')->get();
        dd($notice);*/

        /*$notice = DB::select('select * from notices');
        return view('backend/Admin/Notice.index', ['notices'=>$notice]);
    }*/

    public function addNotice(Request $request){
        $request->validate([
            'txtDate' =>'required |date',
            'txtEvent'=>'required'
        ]);

        $data = $request->all();
        Notices::create([
            'noticeId'  => null,
            'date'      =>$data['txtDate'],
            'event'     =>$data['txtEvent']
        ]);
        return redirect()->route('addNotice')->withSuccess('Notice is created!');
    }

    public function editNotice($id){
        $notices = Notices::select('select * from notices where noticeId = ?',[$id]);
        #$notice = Notices::select($id);
        return view('backend/Admin/Notice.editNotice', ['notices'=>$notices]);
    }

    public function edit_validate(Request $request){
        $request -> validate([
            'txtDate' =>'required |date',
            'txtEvent'=>'required'
        ]);

        $data = $request->all();
        if(!empty($data['txtDate'])){
            $form_data = array(
                'noticeId'  => $data['hidden_id'],
                'date'      => $data['txtDate'],
                'event'     => $data['txtEvent']
            );
        }
        Notices::whereID($data['hidden_id'])->update($form_data);
        return redirect()->route('edit_validate')->withSuccess('Notice is edited!');
    }

}
