<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerSchool extends Model
{
    protected $fillable = [
        'name',
        'address',
        'contact_person',
        'phone',
        'email',
        'school_type',
        'student_count',
        'teacher_count',
        'programs_interest',
        'message',
        'partnership_date',
        'logo',
        'is_active',
    ];

    protected $casts = [
        'partnership_date' => 'date',
        'is_active' => 'boolean',
    ];
}
