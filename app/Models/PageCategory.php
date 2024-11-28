<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PageCategory extends Model
{
    use HasFactory;

    protected $table = 'page_categories';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
