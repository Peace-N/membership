<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PageCategory;
use App\Services\PageManager;

class PageController extends Controller
{
    public function __construct(
        private PageManager $pageManager
    ) {

    }

    public function view(string $slug)
    {
        $user = auth()->user();
        $isPublished = $user && $user->isAdmin() ? null : true; // if user is admin, show all posts, otherwise only published posts

        $post = $this->pageManager->getPageBySlug($slug, $isPublished);

        return view('page.view', [
            'post' => $post,
            'morePosts' => $this->pageManager->getMorePages($post),
        ]);
    }

    public function all()
    {
        return view('page.all', [
            'posts' => $this->pageManager->getAllPages(),
        ]);
    }

    public function category(string $slug)
    {
        $category = PageCategory::where('slug', $slug)->firstOrFail();

        if($slug === 'support' || $slug === 'resources') {

            if(request()->has('product_category')) {
                $productSlug = request()->input('product_category');
                $productCategory = Category::where('portal', $productSlug)->firstOrFail();
                return view('page.category-help', [
                    'category' => $category,
                    'product' => $productCategory,
                    'posts' => $this->pageManager->getAllPagesForProductCategory($category, $productCategory),
                ]);
            }
            return view('page.help', [
                'category' => $category,
                'posts' => $this->pageManager->getAllPagesForCategory($category),
            ]);

        }

        if($slug === 'affiliates') {

            return view('page.affiliate', [
                'category' => $category,
                'posts' => $this->pageManager->getAllPagesForCategory($category),
            ]);

        }

        if($slug === 'resellers') {

            return view('page.reseller', [
                'category' => $category,
                'posts' => $this->pageManager->getAllPagesForCategory($category),
            ]);

        }

        return view('page.category', [
            'category' => $category,
            'posts' => $this->pageManager->getAllPagesForCategory($category),
        ]);
    }
}
