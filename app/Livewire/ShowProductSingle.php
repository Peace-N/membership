<?php

namespace App\Livewire;

use Livewire\Component;

class ShowProductSingle extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.show-product-single');
    }
}