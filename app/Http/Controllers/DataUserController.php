<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataUser;

class DataUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $datauser = DataUser::all();
        return view('dashboard.datauser.datauserList', ['datauser'=>$datauser]);
    }
    public function create()
    {
        return view('dashboard.datauser.createdatauser');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
           'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'username' => 'required',
            'password' => 'required',
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'nik' => 'required'
            ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
     
        $nama_file = time()."_".$file->getClientOriginalName();
     
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'photo_user';
        $file->move($tujuan_upload,$nama_file);
        DB::table('userdata')->insert([
            'USER_USERNAME' => $request->username,
            'USER_PASSWORD' => $request->password,
            'USER_NAME' => $request->name,
            'USER_EMAIL' => $request->email,
            'BIRTH_DATE' => $request->birthdate,
            'USER_PHONE' => $request->phone,
            'USER_ADDRESS' => $request->address,
            'NIK' => $request->nik,
            'USER_BLOODTYPES' => $request->bloodtype,
            'AGE' => $request->age,
            'PHOTO' => $nama_file
        ]);
        $request->session()->flash('message', 'Successfully add user');
        return redirect()->route('datauser.index');
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
             'username' => 'required',
             'password' => 'required',
             'name' => 'required',
             'email' => 'required',
             'birthdate' => 'required',
             'phone' => 'required|numeric',
             'address' => 'required',
             'nik' => 'required'
             ]);
         // menyimpan data file yang diupload ke variabel $file
         $file = $request->file('file');
      
         $nama_file = time()."_".$file->getClientOriginalName();
      
               // isi dengan nama folder tempat kemana file diupload
         $tujuan_upload = 'photo_user';
         $file->move($tujuan_upload,$nama_file);
         DB::table('userdata')->where('ID_USER',$request->id)->update([
             'USER_USERNAME' => $request->username,
             'USER_PASSWORD' => $request->password,
             'USER_NAME' => $request->name,
             'USER_EMAIL' => $request->email,
             'BIRTH_DATE' => $request->birthdate,
             'USER_PHONE' => $request->phone,
             'USER_ADDRESS' => $request->address,
             'NIK' => $request->nik,
             'USER_BLOODTYPES' => $request->bloodtype,
             'AGE' => $request->age,
             'PHOTO' => $nama_file
         ]);
         $request->session()->flash('message', 'Successfully add user');
         return redirect()->route('datauser.index');
     }
    public function show($id)
    {
        $user = DB::table('userdata')->where('ID_USER',$id)->get();
        return view('dashboard.datauser.datauserShow',['users'=>$user]);
    }
    public function edit($id)
    {
        $user = DB::table('userdata')->where('ID_USER',$id)->get();
        return view('dashboard.datauser.editdatauser',['users'=>$user]);
    }
    public function destroy($id)
    {
        $stocks =  DB::table('userdata')->where('ID_USER',$id)->delete();
        return redirect()->route('datauser.index');
    }
}