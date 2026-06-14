<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'angkatan',
        'email',
    ];
}
