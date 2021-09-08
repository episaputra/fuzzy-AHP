<?php

namespace App\Http\Controllers;

use App\spesifikasi;
use Illuminate\Http\Request;

class SpesifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('spesifikasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\spesifikasi  $spesifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(spesifikasi $spesifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\spesifikasi  $spesifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(spesifikasi $spesifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\spesifikasi  $spesifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spesifikasi $spesifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\spesifikasi  $spesifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(spesifikasi $spesifikasi)
    {
        //
    }
}
