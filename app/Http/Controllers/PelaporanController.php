<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    function form()
    {
        return view('formPelaporan');
    }

    function proses(Request $requestdata)
    {
        $nama = $requestdata->input('nama');
        $lokasi = $requestdata->input('lokasi');
        $tinggi = $requestdata->input('tinggi');

        return view('hasilPelaporan', compact('nama', 'lokasi', 'tinggi'));
    }
}
