<?php

use Illuminate\Support\Facades\Route;

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

// Route CRUTD
Route::get('/pengangguran','PengangguranController@index');
// tambah
Route::get('/pengangguran/tambah','PengangguranController@tambah');
Route::post('/pengangguran/store','PengangguranController@store');
// edit
Route::get('/pengangguran/edit/{id}','PengangguranController@edit');
Route::post('/pengangguran/update','PengangguranController@update');
// Hapus
Route::get('/pengangguran/hapus/{id}','PengangguranController@hapus');
