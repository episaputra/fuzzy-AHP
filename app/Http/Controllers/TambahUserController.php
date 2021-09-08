<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\tambah_user;
use App\user;
use Illuminate\Http\Request;

class TambahUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = user::all();

        return view('tambah_user.index', compact('user'));
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

        $user = new user;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make ($request['password']);
        $user->level = $request['level'];

        $user->save();

        return redirect('tambah_user');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tambah_user  $tambah_user
     * @return \Illuminate\Http\Response
     */
    public function show(tambah_user $tambah_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tambah_user  $tambah_user
     * @return \Illuminate\Http\Response
     */
    public function edit(tambah_user $tambah_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tambah_user  $tambah_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tambah_user $tambah_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tambah_user  $tambah_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(tambah_user $tambah_user)
    {
        //
    }
}
