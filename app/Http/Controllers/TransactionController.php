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
            'healthdoc' => 'required|file|mimes:pdf,docx,doc|max:2048',
            'statement' => 'required|file|mimes:pdf,docx,doc|max:2048',
            'identitycard' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'bloodid' => 'required|numeric',
            'userid' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            'date' => 'required',
            ]);
        // menyimpan data file yang diupload ke variabel $file
        $healthdoc = $request->file('healthdoc');
        $statement = $request->file('statement');
        $identitycard = $request->file('identitycard');
        $health_doc = time()."_".$healthdoc->getClientOriginalName(); 
        $statements = time()."_".$statement->getClientOriginalName();
        $identity_card = time()."_".$identitycard->getClientOriginalName();
     
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'photo_transaction';
        $healthdoc->move($tujuan_upload,$health_doc);
        $statement->move($tujuan_upload,$statements);
        $identitycard->move($tujuan_upload,$identity_card);
        DB::table('transaction')->insert([
            'ID_BLOOD' => $request->bloodid,
            'ID_USER' => $request->userid,
            'CATEGORY' => $request->category,
            'HEALTH_DOC' => $health_doc,
            'STATEMENT' => $statements,
            'STATUS' => $request->status,
            'DATE' => $request->date,
            'IDENTITY_CARD' => $identity_card,
        ]);
        $request->session()->flash('message', 'Successfully add transaction');
        return redirect()->route('transaction.index');
    }
    public function update(Request $request, $ID_TRANS){
        $this->validate($request, [
            'healthdoc' => 'required|file|mimes:pdf,docx,doc|max:2048',
            'statement' => 'required|file|mimes:pdf,docx,doc|max:2048',
            'identitycard' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'bloodid' => 'required|numeric',
            'userid' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            'date' => 'required',
             ]);
         // menyimpan data file yang diupload ke variabel $file
         $healthdoc = $request->file('healthdoc');
         $statement = $request->file('statement');
         $identitycard = $request->file('identitycard');
         $health_doc = time()."_".$healthdoc->getClientOriginalName(); 
         $statements = time()."_".$statement->getClientOriginalName();
         $identity_card = time()."_".$identitycard->getClientOriginalName();
      
               // isi dengan nama folder tempat kemana file diupload
               $tujuan_upload = 'photo_transaction';
               $healthdoc->move($tujuan_upload,$health_doc);
                $statement->move($tujuan_upload,$statements);
                $identitycard->move($tujuan_upload,$identity_card);
         DB::table('transaction')->where('ID_TRANS',$request->transactionid)->update([
            'ID_BLOOD' => $request->bloodid,
            'ID_USER' => $request->userid,
            'CATEGORY' => $request->category,
            'HEALTH_DOC' => $health_doc,
            'STATEMENT' => $statements,
            'STATUS' => $request->status,
            'DATE' => $request->date,
            'IDENTITY_CARD' => $identity_card,
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
    public function downloadHealthDoc($ID_TRANS)
    {
        $transaction = Transaction::where('ID_TRANS', $ID_TRANS)->firstOrFail();
        $pathToFile = public_path('photo_transaction/' . $transaction->HEALTH_DOC);
        return response()->download($pathToFile);
    }
    public function downloadStatement($ID_TRANS)
    {
        $transaction = Transaction::where('ID_TRANS', $ID_TRANS)->firstOrFail();
        $pathToFile = public_path('photo_transaction/' . $transaction->STATEMENT);
        return response()->download($pathToFile);
    }
}