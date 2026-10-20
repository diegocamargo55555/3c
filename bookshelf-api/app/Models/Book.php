<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'title',
        'author',
        'pages',
        'status',
        'rating',
    ];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

}
