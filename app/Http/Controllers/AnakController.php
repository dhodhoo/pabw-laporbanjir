<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function form()
    {
        return view('form-registrasi-anak');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $jenisKelamin = $request->input('jenis_kelamin');
        $tanggalLahir = $request->input('tanggal_lahir');
        $namaOrangTua = $request->input('nama_orang_tua');
        $alamat = $request->input('alamat');

        return view('profil-anak', compact('nama', 'jenisKelamin', 'tanggalLahir', 'namaOrangTua', 'alamat'));
    }
}
