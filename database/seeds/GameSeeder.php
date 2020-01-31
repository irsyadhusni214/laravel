<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{

    public function run()
    {
        $gow = [
            ['kode_game' => '23', 'nama_game' => 'Point Blank', 'genre' => 'FPS', 'tgl_rilis' => '2003-06-29', 'developer' => 'Zepettoo', 'operation' => 'PC', 'batas_umur' => '17'],
            ['kode_game' => '15', 'nama_game' => 'Resident Evil', 'genre' => 'TPP/Horror', 'tgl_rilis' => '2019-06-12', 'developer' => 'CapCom', 'operation' => 'PC', 'batas_umur' => '17'],
            ['kode_game' => '19', 'nama_game' => 'Mobile Legend', 'genre' => 'MOBA', 'tgl_rilis' => '2017-04-15', 'developer' => 'Moonton', 'operation' => 'Mobile', 'batas_umur' => '15'],
            ['kode_game' => '53', 'nama_game' => 'CS:GO', 'genre' => 'FPS', 'tgl_rilis' => '2002-02-19', 'developer' => 'MPGP', 'operation' => 'PC', 'batas_umur' => '17'],
            ['kode_game' => '26', 'nama_game' => 'PES 2019', 'genre' => 'SPORT', 'tgl_rilis' => '2003-03-29', 'developer' => 'EFootBall', 'operation' => 'PC/Consol', 'batas_umur' => '13'],
            ['kode_game' => '28', 'nama_game' => 'Tomb Rider', 'genre' => 'Adventure', 'tgl_rilis' => '2016-05-17', 'developer' => 'GameSport', 'operation' => 'PC/Consol', 'batas_umur' => '17'],
            ['kode_game' => '83', 'nama_game' => 'Need For Speed', 'genre' => 'RACE', 'tgl_rilis' => '2004-06-21', 'developer' => 'EA', 'operation' => 'PC/Consol', 'batas_umur' => '17'],
            ['kode_game' => '12', 'nama_game' => 'Pamali', 'genre' => 'Horror/FPS', 'tgl_rilis' => '2018-05-19', 'developer' => 'Indo', 'operation' => 'PC', 'batas_umur' => '17'],
            ['kode_game' => '54', 'nama_game' => 'Apex Legend', 'genre' => 'FPS', 'tgl_rilis' => '2018-07-12', 'developer' => 'Omega', 'operation' => 'PC', 'batas_umur' => '17'],
            ['kode_game' => '29', 'nama_game' => 'God Of War', 'genre' => 'Adventure', 'tgl_rilis' => '2004-02-12', 'developer' => 'GameSport', 'operation' => 'PC/Consol', 'batas_umur' => '17'],

        ];
        DB::table('games')->insert($gow);
    }
}
