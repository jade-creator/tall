<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * \App\Models\Post
 *
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property \Carbon\Carbon $date
 * @property-read \App\Models\User|null $user
 */
class Post extends Model
{
    use HasFactory;

    /** @var array<int, string> */
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'date',
    ];

    /** @var array<string, mixed> */
    protected $casts = [
        'date' => 'date',
    ];

    /** @return mixed \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\User, \App\Models\Post> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
