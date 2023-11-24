<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title',
                            'body',
                            'image'];

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    // public function tags(): BelongsToMany
    // {
    //     return $this->belongsToMany(Tag::class);
    // }
}