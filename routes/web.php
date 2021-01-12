<?php

use Illuminate\Support\Facades\Route;


/*ini root/halaman utama */
Route::get('/', function () {
    return view('index');
/*ini root/halaman utama */
});


Route::get('/balikpapan', function () {
    return view('balikpapan');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/boking', function () {
    return view('boking');
});

Route::get('/lamaru', function () {
    return view('lamaru');
});
Route::get('/manggar', function () {
    return view('manggar');
});
Route::get('/bengkirai', function () {
    return view('bengkirai');
});
Route::get('/danau', function () {
    return view('danau');
});
Route::get('/waduk', function () {
    return view('waduk');
});
Route::get('/kebunraya', function () {
    return view('kebunraya');
});
Route::get('/manggrove', function () {
    return view('manggrove');
});
Route::get('/auri', function () {
    return view('auri');
});
Route::get('/melawai', function () {
    return view('melawai');
});
Route::get('/kemala', function () {
    return view('kemala');
});
Route::get('/dahor', function () {
    return view('dahor');
});
Route::get('/beruang', function () {
    return view('beruang');
});