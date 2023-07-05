<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notices;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\DB;
use Illuminate\Dashboard\Eloquent\Model;

class NoticeController extends Controller
{
    /* -------- admin -----------*/
    public function index(){
        $notice = Notices::all();
        // $notice = DB::select('select * from notices');
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

    public function updateNotice(Request $request, $id){
        //validate the input data
        $request -> validate([
            'txtDate' =>'required',
            'txtEvent'=>'required'
        ]);
        // Update the notice fields using the DB facade
        DB::table('notices')->where('noticeId', $id)->update([
            'date'    => $request->input('txtDate'),
            'event'   => $request->input('txtEvent')
        ]);
        // Redirect back with a success message
        return redirect('/notice')->withSuccess('Notice is updated!');
    }

    // public function editNotice($id){
    //     $notices = Notices::select('select * from notices where noticeId = ?',[$id]);
    //     #$notice = Notices::select($id);
    //     return ['notices'=> $notices];
    // }

    // public function edit_validate(Request $request){
    //     $request -> validate([
    //         'txtDate' =>'required',
    //         'txtEvent'=>'required'
    //     ]);

    //     $data = $request->all();
    //     if(!empty($data['txtDate'])){
    //         $form_data = array(
    //             'noticeId'  => $data['hidden_id'],
    //             'date'      => $data['txtDate'],
    //             'event'     => $data['txtEvent']
    //         );
    //     }
    //     Notices::whereID($data['hidden_id'])->update($form_data);
    //     return redirect()->route('edit_validate')->withSuccess('Notice is edited!');
    // }

    public function deleteNotice($id){
        DB::delete('delete from notices where noticeId = ?', [$id]);
        return redirect('/notice')->with('Success', 'Notice is deleted!');
    }
}
