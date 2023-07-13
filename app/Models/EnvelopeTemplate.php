<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnvelopeTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'meta'
    ];

    protected function meta(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function envelope()
    {
        return $this->hasMany(Envelope::class);
    }
}
