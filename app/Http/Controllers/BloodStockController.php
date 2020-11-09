<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BloodStock;

class BloodStockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $stock = BloodStock::all();
       //$notes = Notes::with('user')->with('status')->paginate( 20 );
        return view('dashboard.bloodstock.bloodStockList', ['stocks'=>$stock]);
    }
    public function create()
    {
        return view('dashboard.bloodstock.createbloodStock');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'stock'         => 'required|numeric',
            'bloodtype'     => 'required'
        ]);
        $user = auth()->user();
        DB::table('bloodbank')->insert([
            'ID_ADMIN' => $user->id,
            'STOCK' => $request->stock,
            'USER_BLOODTYPES' => $request->bloodtype
        ]);
        $request->session()->flash('message', 'Successfully add stock');
        return redirect()->route('bloodbank.index');
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'stock'         => 'required|numeric',
            'bloodtype'     => 'required'
        ]);
        $user = auth()->user();
        DB::table('bloodbank')->where('ID_BLOOD',$request->id)->update([
            'STOCK' => $request->stock,
            'USER_BLOODTYPES' => $request->bloodtype
        ]);
        $request->session()->flash('message', 'Successfully add stock');
        return redirect()->route('bloodbank.index');
    }
    public function show($id)
    {
        $stock = DB::table('bloodbank')->where('ID_BLOOD',$id)->get();
        return view('dashboard.bloodstock.bloodStockShow',['stock'=>$stock]);
    }
    public function edit($id)
    {
        $stock = DB::table('bloodbank')->where('ID_BLOOD',$id)->get();
        return view('dashboard.bloodstock.editbloodStock',['stock'=>$stock]);
    }
    public function destroy($id)
    {
        $stocks =  DB::table('bloodbank')->where('ID_BLOOD',$id)->delete();
        return redirect()->route('bloodbank.index');
    }
}