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
        'pesantren_background',
        'skills',
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
