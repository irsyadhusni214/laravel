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


// Route::get('halo', function () {
//     return 'Halo Ini Aplikasi Laravel Pertama Saya' .
//         '<br>Laravel, WOW';
// });

// Route::get('profil/irsyad', function () {
//     return 'Halo Saya Irsyad HEHE, Rank Saya Legend';
// });

// Route::get('profil/rafli', function () {
//     return 'Halo Saya Rafli HEHE, Rank Saya GM';
// });

// Route::get('profil/kajay', function () {
//     return 'Halo Saya Ahmad/Jaycel HEHE';
// });

// Route::get('profil/raihan', function () {
//     return 'Halo Saya Angsam HEHE';
// });

// Route::get('profil/hilmi', function () {
//     return 'Halo Saya Kimi HEHE';
// });

// Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}', function ($a, $b, $c, $d) {
//     return 'Nama : ' . $a . '<br>Alamat : ' . $b . '<br>Sekolah : ' . $c . '<br>Umur : ' . $d . 'tahun';
// });

// Route::get('pesan/{makanan?}/{minuman?}/{harga?}', function ($a = null, $b = null, $c = null) {
//     $str = "silahkan pesan dulu";
//     if (isset($a)) {
//         $str = 'Anda Memesan ' . $a;
//     }
//     if (isset($b)) {
//         $str .= ' & ' . $b;
//     }

//     $psn = " Ukuran : ";

//     if ($c <= 0) {
//         $str = "Harga Tidak Valid";
//     } else if ($c >= 35000) {
//         $str .= $psn . "Lerge";
//     } else if ($c >= 25000) {
//         $str .= $psn . "Medium";
//     } else if ($c < 25000) {
//         $str .= $psn . "Small";
//     }
//     return $str;
// });


Route::get('tni/{nama?}/{bb?}/{umur?}', function ($a = null, $b = null, $c = null) {
    $skuy = "Silahkan Isi Terlebih Dahulu";
    if (isset($a)) {
        $skuy = 'Nama Anda : ' . $a;
    }

    $bb = "<br>Berat Badan Anda: ";
    if ($b <= 50) {
        $skuy .= $bb . $b . " (Anda Kurang Nutrisi)";
    } else if ($b >= 76 || $b >= 100) {
        $skuy .= $bb . $b . " (Anda Harus Turun Berat Badan)";
    } else if ($b >= 65 || $b >= 75) {
        $skuy .= $bb . $b . " (Berat Badan Anda Ideal)";
    } else if ($b >= 50 || $b >= 64) {
        $skuy .= $bb . $b . " (Naikan Berat Badan Anda)";
    }

    $umr = "<br>Umur Anda: ";
    if ($c >= 30 && $c <= 40) {
        $skuy .= $umr . $c . " (Perwira)";
    } else if ($c >= 40 && $c <= 50) {
        $skuy .= $umr . $c . " (Laksamana)";
    } else if ($c >= 50 && $c <= 60) {
        $skuy .= $umr . $c . " (Jendral)";
    }
    return $skuy;
});
