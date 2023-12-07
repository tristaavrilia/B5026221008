<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hello', function () {
    return view('pertemuan1');
})->name('p1');

Route::get('/style', function () {
    return view('pertemuan2');
})->name('p2');

Route::get('/card', function () {
    return view('pertemuan3');
})->name('p3');

Route::get('/responsive', function () {
    return view('pertemuan4');
})->name('p4');

Route::get('/js1', function () {
    return view('pertemuan5a');
})->name('p5a');

Route::get('/js2', function () {
    return view('pertemuan5b');
})->name('p5b');

Route::get('/validasi', function () {
    return view('pertemuan6');
})->name('p6');

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');  //kalo post diencrypt, get dishow

//route CRUD Pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexkeranjangbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');

//route CRUD Mobil
Route::get('/mobil','App\Http\Controllers\MobilController@index');
Route::get('/mobil/tambah','App\Http\Controllers\MobilController@tambah');
Route::post('/mobil/store','App\Http\Controllers\MobilController@store');
Route::get('/mobil/edit/{id}','App\Http\Controllers\MobilController@edit');
Route::post('/mobil/update','App\Http\Controllers\MobilController@update');
Route::get('/mobil/hapus/{id}','App\Http\Controllers\MobilController@hapus');
Route::get('/mobil/cari','App\Http\Controllers\MobilController@cari');
Route::get('/mobil/view/{id}','App\Http\Controllers\MobilController@view');
