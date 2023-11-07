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
