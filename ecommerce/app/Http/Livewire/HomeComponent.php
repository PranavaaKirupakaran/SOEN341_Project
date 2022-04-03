<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::class;
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
        }
        return view('livewire.home-component', ['lproducts' => $lproducts])->layout('layouts.base');
    }
}
