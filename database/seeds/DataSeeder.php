<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama' => 'Irsyad', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2003-06-29', 'hobi' => 'Main Game', 'umur' => '16', 'alamat' => 'TCI'],
            ['nama' => 'Rafly', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2003-01-16', 'hobi' => 'ngusep', 'umur' => '16', 'alamat' => 'Sadang'],
            ['nama' => 'Lukman', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2003-05-29', 'hobi' => 'sunmori', 'umur' => '16', 'alamat' => 'Bojong'],
            ['nama' => 'Farrel', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2001-02-15', 'hobi' => 'Nyanyi', 'umur' => '17', 'alamat' => 'Sari Asih'],
            ['nama' => 'Romi', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2003-04-23', 'hobi' => 'Main Game', 'umur' => '16', 'alamat' => 'TCI'],
            ['nama' => 'Alfi', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2004-09-14', 'hobi' => 'Ngedit', 'umur' => '15', 'alamat' => 'Sayati'],
            ['nama' => 'Ahmad Jay', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2003-07-15', 'hobi' => 'COD', 'umur' => '16', 'alamat' => 'Bojong'],
            ['nama' => 'Parhan', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2001-12-29', 'hobi' => 'Modip Motor', 'umur' => '17', 'alamat' => 'Rancamanyar'],
            ['nama' => 'Angsam', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2002-11-18', 'hobi' => 'sunmori', 'umur' => '17', 'alamat' => 'Rancamanyar'],
            ['nama' => 'Hilmi', 'jenis_kelamin' => 'Laki-Laki', 'sekolah' => 'SMK ASSALAM', 'tgl_lahir' => '2001-01-01', 'hobi' => 'Ngegitar', 'umur' => '17', 'alamat' => 'Dayeuhkolot'],
        ];

        DB::table('tugas')->insert($post);
    }
}
