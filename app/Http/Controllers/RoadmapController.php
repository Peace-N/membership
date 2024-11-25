<?php

namespace App\Http\Controllers;

use App\Models\Product;

class RoadmapController extends Controller
{
    public function index()
    {
        $this->assertRoadmapEnabled();

        return view('roadmap.index');
    }

    public function item(Product $product)
    {
//        $this->assertRoadmapEnabled();
        $slugs = [$product->slug];

        return view('plans.index', [
            'product' => $slugs,
            'desc' => $product,
        ]);

    }

    public function suggest()
    {
        $this->assertRoadmapEnabled();

        return view('roadmap.suggest');
    }

    private function assertRoadmapEnabled()
    {
        if (! config('app.roadmap_enabled')) {
            abort(404);
        }
    }
}
