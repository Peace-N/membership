<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_managed',
        'name',
        'description',
        'slug',
        'features',
        'is_popular',
        'is_default',
        'metadata',
    ];

    protected $casts = [
        'features' => 'array',
        'metadata' => 'array',
    ];

    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
