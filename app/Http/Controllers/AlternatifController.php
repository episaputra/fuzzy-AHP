<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alternatif;
class AlternatifController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $alternatif = alternatif::all();
        return view('alternatif.index', compact('alternatif'));

    }
  
    public function pdetail($id){
        
        $alternatif = alternatif::find($id);
        return view('alternatif.pdetail', compact('alternatif'));

    }
}
