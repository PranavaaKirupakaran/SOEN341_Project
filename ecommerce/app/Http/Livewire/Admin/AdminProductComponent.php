<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Cart;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $cart = Cart::find($id);
        $cart->delete();
        $product->delete();
        session()->flash('message', 'Product has been deleted successfully!');
    }
    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
