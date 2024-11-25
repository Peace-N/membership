<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowProductQueryStringContent extends Component
{
    public \Illuminate\Database\Eloquent\Collection $categories;

    public function render()
    {
        $this->categories = Category::all()->load('products');

        return view('livewire.show-product-query-string-content');
    }
}
