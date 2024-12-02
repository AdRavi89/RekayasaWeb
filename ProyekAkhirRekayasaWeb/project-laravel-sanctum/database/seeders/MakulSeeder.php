<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makul;

class MakulSeeder extends Seeder
{
    public function run(): void
    {
        Makul::create([
            'nama' => 'Pemrograman Web',
            'sks' => 3,
        ]);

        Makul::create([
            'nama' => 'Jaringan Komputer',
            'sks' => 2,
        ]);
    }
}
