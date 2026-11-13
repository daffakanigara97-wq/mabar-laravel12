<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = 'murids';

    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon',
        'alamat',
        'no_telp',
        'jenis_kelamin',
    ];
}