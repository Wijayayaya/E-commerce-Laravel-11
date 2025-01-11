<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class HomeCategory extends Component
{
    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.home-category', ['categories' => $categories]);
    }
}
