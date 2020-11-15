<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $userdata = UserData::all();
        return view('dashboard.userdata.datauserList', ['userdata'=>$userdata]);
    }
    public function create()
    {
        return view('dashboard.userdata.createdatauser');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
           'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'userid' => 'required',
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
            'ID_USER' => $request->userid,
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
        return redirect()->route('userdata.index');
    }
    public function update(Request $request, $ID_USER){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'userid' => 'required',
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
         DB::table('userdata')->where('ID_USER',$request->ID_USER)->update([
            'ID_USER' => $request->userid, 
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
         return redirect()->route('userdata.index');
     }
    public function show($userid)
    {
        $userdata = DB::table('userdata')->where('ID_USER',$userid)->get();
        return view('dashboard.userdata.datauserShow',['userdata'=>$userdata]);
    }
    public function edit($userid)
    {
        $userdata = DB::table('userdata')->where('ID_USER',$userid)->get();
        return view('dashboard.userdata.editdatauser',['userdata'=>$userdata]);
    }
    public function destroy($userid)
    {
        $userdata =  DB::table('userdata')->where('ID_USER',$userid)->delete();
        return redirect()->route('userdata.index');
    }
}