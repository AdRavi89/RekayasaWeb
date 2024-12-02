<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens'; // Nama tabel

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'nidn',
        'bidang',
    ];
}