<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoverningBody extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'description',
        'status'
    ];
}
