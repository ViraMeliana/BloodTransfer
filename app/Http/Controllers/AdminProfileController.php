<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdminProfile;

class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $adminprofile = AdminProfile::all();
        return view('dashboard.adminprofile.adminList', ['adminprofile'=>$adminprofile]);
    }
    public function create()
    {
        return view('dashboard.adminprofile.adminCreate');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'profileadminid' => 'required',
            'adminid' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required'
            ]);
        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('file');
     
        // $nama_file = time()."_".$file->getClientOriginalName();
     
        //       // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'photo_user';
        // $file->move($tujuan_upload,$nama_file);
        DB::table('adminprofile')->insert([
            'ID_PROFILEADMIN' => $request->profileadminid,
            'ID_ADMIN' => $request->adminid,
            'ADMIN_ADDRESS' => $request->address,
            'ADMIN_PHONE' => $request->phone,
            'ADMIN_REGION' => $request->region,
            'LATITUDE' => $request->latitude,
            'LONGTITUDE' => $request->longtitude
        ]);
        $request->session()->flash('message', 'Successfully add admin');
        return redirect()->route('adminprofile.index');
    }
    public function update(Request $request, $ID_PROFILEADMIN){
        $this->validate($request, [
            'profileadminid' => 'required',
            'adminid' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required'
             ]);
         // menyimpan data file yang diupload ke variabel $file
        //  $file = $request->file('file');
      
        //  $nama_file = time()."_".$file->getClientOriginalName();
      
        //        // isi dengan nama folder tempat kemana file diupload
        //  $tujuan_upload = 'photo_user';
        //  $file->move($tujuan_upload,$nama_file);
         DB::table('adminprofile')->where('ID_PROFILEADMIN',$request->profileadminid)->update([
            'ID_PROFILEADMIN' => $request->profileadminid,
            'ID_ADMIN' => $request->adminid,
            'ADMIN_ADDRESS' => $request->address,
            'ADMIN_PHONE' => $request->phone,
            'ADMIN_REGION' => $request->region,
            'LATITUDE' => $request->latitude,
            'LONGTITUDE' => $request->longtitude
         ]);
         $request->session()->flash('message', 'Successfully add admin');
         return redirect()->route('adminprofile.index');
     }
    public function show($profileadminid)
    {
        $adminprofile = DB::table('adminprofile')->where('ID_PROFILEADMIN',$profileadminid)->get();
        return view('dashboard.adminprofile.adminShow',['adminprofile'=>$adminprofile]);
    }
    public function edit($profileadminid)
    {
        $adminprofile = DB::table('adminprofile')->where('ID_PROFILEADMIN',$profileadminid)->get();
        return view('dashboard.adminprofile.adminEditForm',['adminprofile'=>$adminprofile]);
    }
    public function destroy($profileadminid)
    {
        $adminprofile =  DB::table('adminprofile')->where('ID_PROFILEADMIN',$profileadminid)->delete();
        return redirect()->route('adminprofile.index');
    }
}