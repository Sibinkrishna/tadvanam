<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramGallery extends Model
{
    use HasFactory;
    public $fillable = [
        'program_id',
        'image',
    ];

     public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
