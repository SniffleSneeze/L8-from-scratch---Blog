<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     *  an empty $guarded mean that you can not mass assign
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * return a post that belong to a specific category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    /**
     * return a post that belong to a giver user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
