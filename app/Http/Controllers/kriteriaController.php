<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kriteria;
use App\alternatif;
class kriteriaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $kriteria = kriteria::all();
        return view('kriteria.index', compact('kriteria'));

    }
    public function testkriteria(){
        
        $kriteria = kriteria::all();
        return view('laptop.index', compact('kriteria'));

    }
    public function alternatif(){
        
        $alternatif = alternatif::all();
        return view('laptop.alternatif', compact('alternatif'));

    }
    public function pdetail($id){
        $alternatif = alternatif::all();
        $kriteria = kriteria::find($id);
        return view('kriteria.pdetail', compact('kriteria','alternatif'));

    }
}
