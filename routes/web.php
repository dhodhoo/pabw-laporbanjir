<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelaporanController;

Route::get('/', function () {
    return view('welcome');
})->name('home.page');

Route::get('/home', function () {
    return view('home');
});

Route::get('/coba', [CobaController::class, 'index']);

Route::get('/final', [CobaController::class, 'final']);

Route::get('/hello', function () {
    return 'Hello, Ridho';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Nama Saya $name";
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ridho']);
});

Route::get('/profile/{name?}', function ($name = 'Guest') {
    return view('profile', ['name' => $name]);
});

Route::get('/form', [DataController::class, 'form']);

Route::post('/proses', [DataController::class, 'proses']);

Route::get('/form-mahasiswa', [MahasiswaController::class, 'form']);

Route::post('/proses-mahasiswa', [MahasiswaController::class, 'prosesMahasiswa']);

Route::get('/form-pelaporan', [PelaporanController::class, 'form']);

Route::post('/proses-pelaporan', [PelaporanController::class, 'proses']);

Route::get('/form-registrasi-anak', [AnakController::class, 'form']);

Route::post('/proses-data-anak', [AnakController::class, 'proses']);
