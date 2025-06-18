<?php

namespace App\Models;

use App\Models\ProgramGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'featured_image',
        'location',
        'date',
        'time',
        'program_cata_id',
        'status',
    ];
    public function programgalleries()
    {
        return $this->hasMany(ProgramGallery::class);
    }

protected $casts = [
    'date' => 'date',
    // other casts...
];
public function getEventStatusAttribute()
{
    if ($this->date->isFuture()) {
        return 'upcoming';
    } elseif ($this->date->isPast()) {
        return 'past';
    }
    return 'current';
}

}
