<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class HomeMain extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        $productsCategory3 = Product::with('images', 'primaryImage')->where('category_id', 3)->get();
        $productsCategory2 = Product::with('images', 'primaryImage')->where('category_id', 2)->get();
        $productsCategory4 = Product::with('images', 'primaryImage')->where('category_id', 4)->get();
        return view('livewire.home-main', [
            'categories' => $categories, 
            'products' => $products,
            'productsCategory3' => $productsCategory3,
            'productsCategory2' => $productsCategory2,
            'productsCategory4' => $productsCategory4,
        ]);
    }
}
