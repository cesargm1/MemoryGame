<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drawings extends Model
{
    protected $fillable = [
        'user_id',
        'image',
        'game'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
