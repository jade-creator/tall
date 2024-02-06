<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * \App\Models\Dog
 * 
 * @property int $user_id
 * @property string $name
 * @property string $image
 */
class Dog extends Model
{
    use HasFactory;

    /** @var array<int, string> */
    protected $fillable = [
        'user_id',
        'name',
        'image',
    ];

    /** @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\User, \App\Models\Dog> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
