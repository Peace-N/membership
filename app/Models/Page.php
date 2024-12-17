<?php

namespace App\Models;

use App\Events\SitemapChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'page_category_id',
        'group_page_category_id',
        'title',
        'description',
        'slug',
        'body',
        'is_published',
        'published_at',
    ];

    protected static function booted()
    {


    }

    public function pageCategory(): BelongsTo
    {
        return $this->belongsTo(PageCategory::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function groupPageCategory(): BelongsTo
    {
        return $this->belongsTo(GroupPageCategory::class, 'group_page_category_id');
    }
}
