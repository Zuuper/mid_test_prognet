<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengangguranController extends Controller
{
    public function index(){
        // Mengambil data dari table pengangguran
        $pengangguran = DB::table('tb_pengangguran')->get();

        // mengirim data dari pegawai ke view index
        return view('index',['pengangguran' => $pengangguran]);
    }
    public function tambah(){
        // memanggil view tambah
        return view('tambah');
    }
    public function store(Request $request){
        // Insert data ke table pengangguran
        DB::table('tb_pengangguran')->insert([
            'nama' => $request-> nama,
            'umur' => $request-> umur,
            'alamat' => $request-> alamat,
            'pekerjaan_terakhir' => $request->pekerjaan_terakhir
        ]);
        // alihkan halaman ke halaman pengangguran
        return redirect('/pengangguran');

    }
    // method untuk edit data pengangguran
    public function edit($id){
        // mengambil data pengangguran berdasarkan id yang dipilih
        $pengangguran = DB::table('tb_pengangguran')->where('id_pengangguran',$id)->get();
        // passing data pengangguran yang didapat ke view edit.blade.php
        return view('edit',['pengangguran' => $pengangguran]);
    }
    // update data pengangguran
    public function update(Request $request){
        // update data pengangguran
        DB::table('tb_pengangguran')->where('id_pengangguran',$request->id)->update([
            'nama' => $request-> nama,
            'umur' => $request-> umur,
            'alamat' => $request-> alamat,
            'pekerjaan_terakhir' => $request-> pekerjaan_terakhir
        ]);
        // alihkan halaman ke halaman pengangguran
        return redirect('/pengangguran');
    }
    // method untuk menghapus data pengguran
    public function hapus($id){
        // Menghapus data pengangguran berdasarkan id yang dipilih
        DB::table('tb_pengangguran')->where('id_pengangguran',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pengangguran');
    }
}


