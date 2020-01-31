<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PassingController extends Controller
{
    public function pass()
    {
        $data = "Reza Arap Maniani";
        return view("latihan", compact('data'));
    }

    public function pass1()
    {
        $siswa = [
            ['nama' => 'Kasman', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Kpaler', 'kelas' => 'XI RPL 2'],
        ];

        return view("latihan1", ('data'->$siswa));
    }

    public function pass2()
    {
        $tabungan = \App\Tabungan::all()->take(10);
        return view('latihan2', compact('tabungan'));
    }

    public function pass3($id)
    {
        $tabungan = \App\Tabungan::findOrFail($id);
        return view('latihan3', compact('$tabungan'));
    }
}
