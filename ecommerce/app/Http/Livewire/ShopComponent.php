<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class ShopComponent extends Component
{
    // use WithPagination;
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, $product_price)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}
