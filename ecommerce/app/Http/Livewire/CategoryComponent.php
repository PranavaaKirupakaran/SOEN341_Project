<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Livewire\Component;


class CategoryComponent extends Component
{
    public $sorting;
    public $page;
    public $category_slug;

    /*
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, $product_price)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }
*/
    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->page = 12;
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

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
            $products = Product::where('category_id', $category_id)->paginate($this->page);
        }

        $categories = Category::all();

        return view('livewire.category-component',['products'=>$products, 'categories'=>$categories, 'category_name'=>$category_name])->layout('layouts.base');
    }
}
