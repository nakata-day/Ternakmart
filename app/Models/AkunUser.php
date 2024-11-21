<?php
// app/Models/AkunUser.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'nomer_telepon', 'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
