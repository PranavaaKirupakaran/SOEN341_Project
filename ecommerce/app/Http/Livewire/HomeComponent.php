<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products= Product::class;
        return view('livewire.home-component')->layout('layouts.base');
    }
}
