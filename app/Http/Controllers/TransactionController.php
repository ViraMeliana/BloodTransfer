<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $transaction = Transaction::all();
        return view('dashboard.transaction.transactionList', ['transaction'=>$transaction]);
    }
    public function create()
    {
        return view('dashboard.transaction.createtransaction');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
           'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'transactionid' => 'required|numeric',
            'bloodid' => 'required|numeric',
            'userid' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            'date' => 'required',
            ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
     
        $nama_file = time()."_".$file->getClientOriginalName();

     
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'photo_transaction';
        $file->move($tujuan_upload,$nama_file);
        DB::table('transaction')->insert([
            'ID_TRANS' => $request->transactionid,
            'ID_BLOOD' => $request->bloodid,
            'ID_USER' => $request->userid,
            'CATEGORY' => $request->category,
            'HEALTH_DOC' => $nama_file,
            'STATEMENT' => $nama_file,
            'STATUS' => $request->status,
            'DATE' => $request->date,
            'IDENTITY_CARD' => $nama_file,
        ]);
        $request->session()->flash('message', 'Successfully add transaction');
        return redirect()->route('transaction.index');
    }
    public function update(Request $request, $ID_TRANS){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'transactionid' => 'required|numeric',
            'bloodid' => 'required|numeric',
            'userid' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            'date' => 'required',
             ]);
         // menyimpan data file yang diupload ke variabel $file
         $file = $request->file('file');
      
         $nama_file = time()."_".$file->getClientOriginalName();
      
               // isi dengan nama folder tempat kemana file diupload
         $tujuan_upload = 'photo_transaction';
         $file->move($tujuan_upload,$nama_file);
         DB::table('transaction')->where('ID_TRANS',$request->transactionid)->update([
            'ID_TRANS' => $request->transactionid,
            'ID_BLOOD' => $request->bloodid,
            'ID_USER' => $request->userid,
            'CATEGORY' => $request->category,
            'HEALTH_DOC' => $nama_file,
            'STATEMENT' => $nama_file,
            'STATUS' => $request->status,
            'DATE' => $request->date,
            'IDENTITY_CARD' => $nama_file,
         ]);
         $request->session()->flash('message', 'Successfully add transaction');
         return redirect()->route('transaction.index');
     }
    public function show($ID_TRANS)
    {
        $transaction = DB::table('transaction')->where('ID_TRANS',$ID_TRANS)->get();
        return view('dashboard.transaction.transactionShow',['transaction'=>$transaction]);
    }
    public function edit($ID_TRANS)
    {
        $transaction = DB::table('transaction')->where('ID_TRANS',$ID_TRANS)->get();
        return view('dashboard.transaction.edittransaction',['transaction'=>$transaction]);
    }
    public function destroy($ID_TRANS)
    {
        $transaction =  DB::table('transaction')->where('ID_TRANS',$ID_TRANS)->delete();
        return redirect()->route('transaction.index');
    }
}