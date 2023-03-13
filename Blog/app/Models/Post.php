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
     * load Post data with the category and the author from the DB
     *
     * @var string[]
     */
    protected $with = ['category', 'author'];

    /**
     *  the function is call Filter, the "scope" at the front belong to laravel magic
     *
     * @param $query
     * @param array $filters
     * @return void
     */
    public function scopeFilter($query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where(fn($query) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) => $query
            ->whereHas('category', fn($query) => $query
                ->where('slug', $category)
            ));

        $query->when($filters['author'] ?? false, fn($query, $author) => $query
            ->whereHas('author', fn($query) => $query
                ->where('username', $author)
            ));
    }

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
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
