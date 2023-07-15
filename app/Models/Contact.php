<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'education_level',
        'field',
        'specialization',
        'address',
        'phone_number',
        'email',
        'age',
        'interests',
        'career_project',
        'stage_requirements'
    ];
}
