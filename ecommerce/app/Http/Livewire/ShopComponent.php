<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Livewire\Component;


class ShopComponent extends Component
{
    public $sorting;
    public $page;

    /*
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, $product_price)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }
*/
    public function mount()
    {
        $this->sorting = "default";
        $this->page = 12;
    }

    public function render()
    {
        if($this->sorting=="date")
        {
            $products = Product::orderBy('created_at', 'ASC')->paginate($this->page);
        }
        else if($this->sorting=="price")
        {
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->page);
        }
        else if($this->sorting=="price-desc")
        {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->page);
        }
        else
        {
            $products = Product::paginate($this->page);
        }

        $categories = Category::all();

        return view('livewire.shop-component',['products'=>$products, 'categories'=>$categories])->layout('layouts.base');
    }
}
