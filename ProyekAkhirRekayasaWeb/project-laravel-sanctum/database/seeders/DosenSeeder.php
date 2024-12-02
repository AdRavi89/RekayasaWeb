<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create([
            'nama' => 'Surono',
            'nidn' => '123456789',
            'bidang' => 'Pemrograman',
        ]);

        Dosen::create([
            'nama' => 'Agus Widodo',
            'nidn' => '987654321',
            'bidang' => 'Jaringan',
        ]);
    }
}
