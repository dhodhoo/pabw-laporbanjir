<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function form()
    {
        return view('formMahasiswa');
    }

    function prosesMahasiswa(Request $requestdata)
    {
        $nama = $requestdata->input('nama');
        $nim = $requestdata->input('nim');
        $prodi = $requestdata->input('prodi');
        $semester = $requestdata->input('semester');

        return view('hasilMahasiswa', compact('nama', 'nim', 'prodi', 'semester'));
    }
}
