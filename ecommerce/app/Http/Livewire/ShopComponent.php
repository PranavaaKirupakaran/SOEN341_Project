<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class ShopComponent extends Component
{
    public $sorting;

    public $pagesize;

    public function mount(){
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    // use WithPagination;
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, $product_price)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        if($this->sorting=='date')
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=='price')
        {
            $products = Product::orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=='price-desc')
        {
            $products = Product::orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = Product::paginate($this->pagesize);
        }
        //$products = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}