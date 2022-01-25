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
    return view('dashboard.index');
});

Route::get('/tambahdata', function () {
    return view('dashboard.tambahsiswa');
});

Route::get('/nilai', function () {
    return view('dashboard.nilai');
});

Route::get('/absensi', function () {
    return view('dashboard.absensi');
});

Route::get('/kepribadian', function () {
    return view('dashboard.kepribadian');
});

Route::get('/ekstrakurikuler', function () {
    return view('dashboard.ekstra');
});