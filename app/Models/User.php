<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username', 'firstName', 'lastName', 'companyName', 'email', 'role', 'password'
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

