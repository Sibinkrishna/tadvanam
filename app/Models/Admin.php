<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = ['name', 'email', 'password', 'role_id', 'status'];

    public function role() {
        return $this->belongsTo(Role::class);
    }
}
