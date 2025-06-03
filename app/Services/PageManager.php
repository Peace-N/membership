<?php

namespace App\Services;

use App\Models\Category;
use App\Models\GroupPageCategory;
use App\Models\Page;
use App\Models\PageCategory;

class PageManager
{
    public function getPageBySlug(string $slug, ?bool $isPublished = true)
    {
        $post = Page::where('slug', $slug);

        if ($isPublished) {
            $post->where('is_published', true);
        }

        return $post->firstOrFail();
    }

    public function getMorePages(Page $post, int $limit = 3)
    {
        return Page::where('id', '!=', $post->id)
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getAllPages(int $limit = 31)
    {
        return $this->getAllPagesQuery()
            ->paginate($limit);
    }

    public function getAllPagesForCategory(PageCategory $category, int $limit = 31)
    {
        return $this->getAllPagesQuery()
            ->where('page_category_id', $category->id)
            ->paginate($limit);
    }

    public function getAllPagesForProductCategory(PageCategory $category, Category $productCategory, int $limit = 31)
    {
        return $this->getAllPagesSubCategoriesQuery()
            ->where('category_id', $productCategory->id)
            ->paginate($limit);
    }

    public function getAllPagesQuery()
    {
        return Page::where('is_published', true)
            ->orderBy('title', 'asc');

    }

    public function getAllPagesSubCategoriesQuery()
    {
        return GroupPageCategory::with('pages')
            ->orderBy('name', 'desc');

    }
}
