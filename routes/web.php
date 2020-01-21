<?php

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


Route::get('halo', function () {
    return 'Halo Ini Aplikasi Laravel Pertama Saya' .
        '<br>Laravel, WOW';
});

Route::get('profil/irsyad', function () {
    return 'Halo Saya Irsyad HEHE, Rank Saya Legend';
});

Route::get('profil/rafli', function () {
    return 'Halo Saya Rafli HEHE, Rank Saya GM';
});

Route::get('profil/kajay', function () {
    return 'Halo Saya Ahmad/Jaycel HEHE';
});

Route::get('profil/raihan', function () {
    return 'Halo Saya Angsam HEHE';
});

Route::get('profil/hilmi', function () {
    return 'Halo Saya Kimi HEHE';
});

Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}', function ($a, $b, $c, $d) {
    return 'Nama : ' . $a . '<br>Alamat : ' . $b . '<br>Sekolah : ' . $c . '<br>Umur : ' . $d . ' tahun';
});
