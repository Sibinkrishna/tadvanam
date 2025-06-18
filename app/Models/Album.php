<?php

namespace App\Models;

use App\Models\AlbumImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    Protected $fillable = [
        'title',
        'description',
        'status',

    ];
        public function images()
        {
            return $this->hasMany(AlbumImage::class);
        }
}
