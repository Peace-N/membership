<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowProductQueryString extends Component
{
    /**
     * @var
     */
    public $categories;

    public function render()
    {

        $this->categories = Category::all();

        return view('livewire.show-product-query-string');
    }
}
