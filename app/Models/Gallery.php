<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use HasFactory,
        SoftDeletes,
        InteractsWithMedia;

    protected $fillable = [
        'date',
        'title',
        'content',
        'user_id',
    ];

    protected $casts = [
        'date'  => 'date:j F Y',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
