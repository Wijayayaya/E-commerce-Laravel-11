<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomepageComponent extends Component
{
    public function render()
    {
        return view('livewire.homepage-component', ['products' => Product::all()]);
    }
}
