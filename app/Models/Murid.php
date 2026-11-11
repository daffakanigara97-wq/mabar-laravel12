<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
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
