<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Envelope extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'no_surat',
        'tanggal',
        'value',
        'envelope_template_id',
        'penanggung_jawab_id',
    ];

    protected $casts = [
        'tanggal' => 'date:j F Y',
    ];

    protected function value(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function envelopeTemplate()
    {
        return $this->belongsTo(EnvelopeTemplate::class);
    }

    public function penanggungJawab()
    {
        return $this->belongsTo(PenanggungJawab::class);
    }
}
