<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class SellerProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Product has been deleted successfully!');
    }
    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
