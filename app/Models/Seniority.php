<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seniority extends Model
{
    use HasFactory;

    protected $table = 'seniorities';

    protected $fillable = [
        'name', 'created_at', 'updated_at'
    ];
}
