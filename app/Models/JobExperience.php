<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','created_at', 'updated_at'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
