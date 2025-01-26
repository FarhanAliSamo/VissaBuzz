<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'job_title',
        'seniority_id',
        'industry_id',
        'job_type_id',
        'experience_id',
        'gender',
        'salary_from',
        'salary_to',
        'currency',
        'location',
        'country_id',
        'city_id',
        'job_description',
        'candidate_profile',
        'company_id',
    ];

    public function seniority()
    {
        return $this->belongsTo(Seniority::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function experience()
    {
        return $this->belongsTo(JobExperience::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
