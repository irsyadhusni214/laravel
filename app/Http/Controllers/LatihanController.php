<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function tambah($a = null, $b = null)
    {
        // $jumlah = $a + $b;
        // return 'Penjumlahan Dari ' . $a . ' Dan ' . $b . ' :' . $jumlah;

        $yow = "Silahkan Masukan Angka";
        if (isset($a) || isset($b)) {
            $yow = $a . ' + ' . $b . '= Tidak Valid ' . '<br>Anda Baru Memasukan 1 Angka';
        }
        if (isset($b) && isset($a)) {
            $c = $a + $b;
            $yow = "$a + $b = $c";
        }
        return $yow;
    }

    public function kurang()
    {
        $a = 10;
        $b = 7;
        $jumlah = $a - $b;
        return 'Pengurangan Dari ' . $a . ' Dan ' . $b . ' :' . $jumlah;
    }

    public function bagi()
    {
        $a = 20;
        $b = 4;
        $jumlah = $a / $b;
        return 'Pembagian Dari ' . $a . ' Dan ' . $b . ' :' . $jumlah;
    }
    public function kali()
    {
        $a = 10;
        $b = 10;
        $jumlah = $a * $b;
        return 'Perkalian Dari ' . $a . ' Dan ' . $b . ' :' . $jumlah;
    }

    public function loop()
    {
        $data = [
            ['Nama' => 'Hari', 'Kelas' => 'RPL 1', 'uang_jajan' => 10000],
            ['Nama' => 'Memet', 'Kelas' => 'RPL 1', 'uang_jajan' => 25000],
            ['Nama' => 'Restu', 'Kelas' => 'RPL 2', 'uang_jajan' => 50000],
            ['Nama' => 'Pangestu', 'Kelas' => 'RPL 3', 'uang_jajan' => 25000],
            ['Nama' => 'Rizki', 'Kelas' => 'RPL 4', 'uang_jajan' => 10000],

        ];
        foreach ($data as $val => $key) {

            if ($key['uang_jajan'] >= 50000) {
                $tabungan = $key['uang_jajan'] * 25 / 100;
                $sisa = $key['uang_jajan'] - $tabungan;
            } else if ($key['uang_jajan'] >= 25000) {
                $tabungan = $key['uang_jajan'] * 15 / 100;
                $sisa = $key['uang_jajan'] - $tabungan;
            } else if ($key['uang_jajan'] >= 10000) {
                $tabungan = $key['uang_jajan'] * 10 / 100;
                $sisa = $key['uang_jajan'] - $tabungan;
            }

            echo "Nama = " . $key['Nama'] .
                "<br>Kelas = " . $key['Kelas'] .
                "<br>Uang Jajan = " . $key['uang_jajan'] .
                "<br>Uang Tabungan = " . $tabungan .
                "<br>Uang Sisa = " . $sisa;
            echo "<hr>";
        }
    }


    public function karyawan()
    {
        $data = [
            ['Nama' => 'Hari', 'Agama' => 'Islam', 'Alamat' => 'TCI', 'Jenis_Kelamin' => 'Laki-Laki', 'Jabatan' => 'Manager', 'Jam_Kerja' => 250],
            ['Nama' => 'Dinda', 'Agama' => 'Islam', 'Alamat' => 'Bojong', 'Jenis_Kelamin' => 'Perempuan', 'Jabatan' => 'Sekretaris', 'Jam_Kerja' => 300],
            ['Nama' => 'Sukri', 'Agama' => 'Islam', 'Alamat' => 'Mekar Wangi', 'Jenis_Kelamin' => 'Laki-Laki', 'Jabatan' => 'Staff', 'Jam_Kerja' => 250],
        ];
        foreach ($data as $val => $key) {
            if ($key['Jabatan'] == 'Manager') {
                $surs = 5000000;
            } else if ($key['Jabatan'] == 'Sekretaris') {
                $surs = 3500000;
            } else if ($key['Jabatan'] == 'Staff') {
                $surs = 2500000;
            }
            $bonus = 0;
        }

        $pp = 0.025 * $surs;
        $bon = ($surs + $bonus) - $pp;
        echo "Nama = " . $key['Nama'] .
            "<br>Agama = " . $key['Agama'] .
            "<br>Alamat = " . $key['Alamat'] .
            "<br>Jenis Kelamin = " . $key['Jenis_Kelamin'] .
            "<br>Jabatan = " . $key['Jabatan'] .
            "<br>Jam Kerja = " . $key['Jam_Kerja'] .
            "<br>Gaji = " . $surs .
            "<br>PPN = " . $pp .
            "<br>Gaji Bersih = " . $bon;
        echo "<hr>";
    }
}
