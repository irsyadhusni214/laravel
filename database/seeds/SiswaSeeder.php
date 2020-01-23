<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama' => 'Irsyad', 'nis' => '1237492', 'jenis_kelamin' => 'Laki-Laki', 'alamat' => 'TCI', 'tgl_lahir' => '2003-06-29', 'umur' => '16'],
            ['nama' => 'Rafli', 'nis' => '182319', 'jenis_kelamin' => 'Laki-Laki', 'alamat' => 'Sadang', 'tgl_lahir' => '2003-01-16', 'umur' => '16'],
            ['nama' => 'Alfi', 'nis' => '832742', 'jenis_kelamin' => 'Laki-Laki', 'alamat' => 'Mekar Wangi', 'tgl_lahir' => '2004-06-15', 'umur' => '15'],
            ['nama' => 'Hilmi', 'nis' => '91231', 'jenis_kelamin' => 'Laki-Laki', 'alamat' => 'Dayeuhkolot', 'tgl_lahir' => '2001-01-01', 'umur' => '17'],
            ['nama' => 'Farrel', 'nis' => '921842', 'jenis_kelamin' => 'Laki-Laki', 'alamat' => 'Mekarwangi', 'tgl_lahir' => '2003-05-17', 'umur' => '16']
        ];
        // masukkan data ke database
        DB::table('post')->insert($post);
    }
}
