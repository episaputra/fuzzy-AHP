<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('template');
});
Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tambah_user', 'TambahUserController@index');
Route::post('/tambah_user/cek', 'TambahUserController@store');

Route::get('/test', 'kriteriaController@testkriteria');
Route::get('/kriteria', 'kriteriaController@index');
Route::get('/kriteria/perhitungan/detail/{id}', 'kriteriaController@pdetail');
Route::get('/alternatif/all', 'kriteriaController@alternatif');

Route::get('/profile', 'profileController@index');
Route::get('/profile/data', 'profileController@indexdata')->middleware('auth');;
Route::get('/profile/data/detail/{id}', 'profileController@cekdata')->middleware('auth');;
Route::post('/profile/cek', 'profileController@cek');
Route::get('/alternatif', 'AlternatifController@index');
Route::get('/alternatif/perhitungan/detail/{id}', 'AlternatifController@pdetail');

Route::delete('/profile/delete/{id}', 'profileController@destroy');

Route::get('/spesifikasi', 'SpesifikasiController@index');