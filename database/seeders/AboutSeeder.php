<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about=[
            [
                'nama' => 'Reynaldi Ramadhani Eka Purnomo',
                'kelas' => 'TI2D',
                'absen' => '22',
                'description' => 'Saya Berkuliah di Politeknik Negeri Malang angkatan 2019 , Jurusan Informatika
                saya disini berasal dari lumajang , sebelumnya tidak punya basic didalam dunia IT'
            ],
            [
                'nama' => 'Moch Dimasqi Aliffudin Faiz',
                'kelas' => 'TI2D',
                'absen' => '13',
                'description' => 'Saya Berkuliah di Politeknik Negeri Malang angkatan 2019 , Jurusan Informatika
                saya disini berasal dari probolinggo , sebelumnya basic saya adalah jaringan'
            ]
        ];
        DB::table('abouts')->insert($about);
    }
}
