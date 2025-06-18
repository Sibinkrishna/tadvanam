<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlbumImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'image_path',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
