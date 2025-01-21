<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'website', 'logo', 'description', 'industry'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
