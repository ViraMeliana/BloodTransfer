<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $feedback = Feedback::all();
        return view('dashboard.feedback.feedbacklist', ['feedback'=>$feedback]);
    }
    public function create()
    {
        return view('dashboard.feedback.feedbackcreate');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required',
            'adminid' => 'required',
            'date' => 'required',
            'comment' => 'required',
            ]);
        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('file');
     
        // $nama_file = time()."_".$file->getClientOriginalName();
     
        //       // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'photo_user';
        // $file->move($tujuan_upload,$nama_file);
        DB::table('feedback')->insert([
            'ID_USER' => $request->userid,
            'ID_ADMIN' => $request->adminid,
            'DATE' => $request->date,
            'COMMENT' => $request->comment,
        ]);
        $request->session()->flash('message', 'Successfully add feedback');
        return redirect()->route('feedback.index');
    }
    public function update(Request $request, $ID_PROFILEADMIN){
        $this->validate($request, [
            'userid' => 'required',
            'adminid' => 'required',
            'date' => 'required',
            'comment' => 'required',
             ]);
         // menyimpan data file yang diupload ke variabel $file
        //  $file = $request->file('file');
      
        //  $nama_file = time()."_".$file->getClientOriginalName();
      
        //        // isi dengan nama folder tempat kemana file diupload
        //  $tujuan_upload = 'photo_user';
        //  $file->move($tujuan_upload,$nama_file);
         DB::table('feedback')->where('ID_FEEDBACK',$request->feedbackid)->update([
            'ID_USER' => $request->userid,
            'ID_ADMIN' => $request->adminid,
            'DATE' => $request->date,
            'COMMENT' => $request->comment,
         ]);
         $request->session()->flash('message', 'Successfully add admin');
         return redirect()->route('feedback.index');
     }
    public function show($feedbackid)
    {
        $feedback = DB::table('feedback')->where('ID_FEEDBACK',$feedbackid)->get();
        return view('dashboard.feedback.feedbackshow',['feedback'=>$feedback]);
    }
    public function edit($feedbackid)
    {
        $feedback = DB::table('feedback')->where('ID_FEEDBACK',$feedbackid)->get();
        return view('dashboard.feedback.feedbackedit',['feedback'=>$feedback]);
    }
    public function destroy($feedbackid)
    {
        $feedback =  DB::table('feedback')->where('ID_FEEDBACK',$feedbackid)->delete();
        return redirect()->route('feedback.index');
    }
}