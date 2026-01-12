<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Volunteer extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'university',
        'major',
        'semester',
        'pesantren_background',
        'pesantren_name',
        'skills',
        'motivation',
        'availability',
        'bio',
        'photo',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
