<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'user_id'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
