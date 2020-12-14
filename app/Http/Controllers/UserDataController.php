<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataUser;
use File;

class UserDataController extends Controller
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
        return redirect()->route('userdata.index');
    }
    public function update(Request $request, $ID_USER){
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
         DB::table('userdata')->where('ID_USER',$request->ID_USER)->update([
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
    public function show($ID_USER)
    {
        $user = DB::table('userdata')->where('ID_USER',$ID_USER)->get();
        return view('dashboard.datauser.datauserShow',['users'=>$user]);
    }
    public function edit($ID_USER)
    {
        $user = DB::table('userdata')->where('ID_USER',$ID_USER)->get();
        return view('dashboard.datauser.editdatauser',['users'=>$user]);
        // @dd($user);
    }
    public function destroy($ID_USER)
    { 
        // $tujuan_upload = '/photo_user/';
        // $user = DB::table('userdata')->select('PHOTO')->where('ID_USER',$ID_USER)->get();
        // File::delete(public_path().$tujuan_upload.$user);
        // $user =  DB::table('userdata')->where('ID_USER',$ID_USER)->delete();
        // return redirect()->route('userdata.index');

        $tujuan_upload = '/photo_user/';
        $user = DB::table('userdata')->select('PHOTO')->where('ID_USER',$ID_USER)->get();
        if(!File::exists(public_path().$tujuan_upload.$user)){
            File::delete(public_path().$tujuan_upload.$user);
        }
        $user =  DB::table('userdata')->where('ID_USER',$ID_USER)->delete();
        return redirect()->back();
    }
}