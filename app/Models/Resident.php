<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'tingkat_pendidikan',
        'pekerjaan',
        'pendapatan',
        'status_pernikahan',
        'agama',
        'kewarganegaraan'
    ];

    protected $casts = [
        'tanggal_lahir'  => 'date:j F Y',
    ];
}
