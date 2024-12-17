<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'image',
        'name',
        'portal',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    public function grouPageCategories(): HasMany
    {
        return $this->hasMany(GroupPageCategory::class);
    }
}
