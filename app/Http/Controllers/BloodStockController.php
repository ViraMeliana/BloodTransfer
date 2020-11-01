<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodStockController extends Controller
{
    public function index()
    {
       // $stock = BloodStockController::with('user')->with('status')->paginate( 20 );
        return view('dashboard.bloodstock.bloodStockList');
    }
    public function create()
    {
        //$statuses = Status::all();
        return view('dashboard.bloodstock.createbloodStock');
    }
    public function show()
    {
        //$note = Notes::with('user')->with('status')->find($id);
        return view('dashboard.bloodstock.bloodStockShow');
    }
    public function edit()
    {
        return view('dashboard.bloodStock.editbloodStock');
    }
}