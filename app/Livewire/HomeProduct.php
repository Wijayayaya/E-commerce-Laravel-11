<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomeProduct extends Component
{
    public function render()
    {
        $productsCategory3 = Product::with('images', 'primaryImage')->where('category_id', 3)->get();
        $productsCategory2 = Product::with('images', 'primaryImage')->where('category_id', 2)->get();
        $productsCategory4 = Product::with('images', 'primaryImage')->where('category_id', 4)->get();
        $product = Product::with('images', 'primaryImage')->get();

        return view('livewire.home-product', [
            'productsCategory3' => $productsCategory3,
            'productsCategory2' => $productsCategory2,
            'productsCategory4' => $productsCategory4,
            'product' => $product,
        ]);
    }
}
