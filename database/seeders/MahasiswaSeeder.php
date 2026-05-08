<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
        [
             'nama' => 'Rahmat',
            'nim' => '240414019',
            'jurusan' => 'IF',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
             'nama' => 'Raihan',
            'nim' => '240414017',
            'jurusan' => 'IF',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
