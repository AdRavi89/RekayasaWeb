<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Agung Dwi Susilo',
            'nim' => 'A.231.22.0038',
            'jurusan' => 'Teknik Informatika',
        ]);
    }
}
