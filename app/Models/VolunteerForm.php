<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerForm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'age', 'education', 'gender', 'message'];
}
