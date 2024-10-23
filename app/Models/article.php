<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'category',
        'date',
        'description',
        'author_id',
        'category_id',
        'role',
        'image'
    ];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
