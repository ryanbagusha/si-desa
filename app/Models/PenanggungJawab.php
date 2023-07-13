<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
    ];

    public function envelope()
    {
        return $this->hasMany(Envelope::class);
    }
}
