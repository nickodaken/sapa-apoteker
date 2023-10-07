<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apoteker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stra_no',
        'category',
        'alumni',
        'experience',
        'practice',
        'price',
        'image',
        'is_active',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
