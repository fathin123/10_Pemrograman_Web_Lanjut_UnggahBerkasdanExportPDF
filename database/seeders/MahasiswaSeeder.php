<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => '2041723007',
                'nama' => 'Muhammad Dhiyaul Auliya',
                'kelas' => 'TI-2G',
                'jurusan' => 'Informatika',
                'no_handphone' => '081910441609'
            ],
            [
                'nim' => '2041723015',
                'nama' => 'Fathin Naufalita',
                'kelas' => 'TI-2E',
                'jurusan' => 'Informaika',
                'no_handphone' => '083835366321'
            ]
            ];

        DB::table('mahasiswa')->insert($data);
    }
}
