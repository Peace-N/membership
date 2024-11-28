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
}
