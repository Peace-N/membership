<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupPageCategory extends Model
{

    protected $table = 'group_page_categories';
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function pages() {
        return $this->hasMany(Page::class);
    }

}
