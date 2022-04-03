<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;

    // Since controllers are not being used, the behaviour is mimicked via the mount() method, the value passed is coming from web.php.
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, $this->qty, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item added in Wishlist');
        return redirect()->route('product.details', ['slug' => $this->slug]);
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return redirect()->route('product.details', ['slug' => $this->slug]);
            }
        }
    }

    public function increaseQuantity()
    {
        $this->qty++;
    }

    public function decreaseQuantity()
    {
        if ($this->qty > 1) {
            $this->qty--;
        }
    }
    // The render() method is expected to return a Blade view.
    public function render()
    {
        // This is using, the query builder's where(), the reference to the correct database table is define in the Product Model.
        // The first argument is the name of the column, the second argument is the value of slug.
        // The first() method only returns one record.
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        // Need to fix this later - no error, but the results will change was a category table is added to the database.
        // The get() method returns all rows that fit the where clase.
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();

        // This passes data into the view and makes it available so it can be displayed.
        // The data passed should be an array with key/value pairs.
        // The view where this data can be accessed is in details-component.blade.php, there you would use the key, but you would add the $ (this is the syntax).
        // The layout() function ensures base.blade.php which includes the header and footer is displayed and details-component.blade.php will be inserted in the middle automarically.
        return view('livewire.details-component', ['product' => $product, 'related_products' => $related_products,  'popular_products' => $popular_products])->layout('layouts.base');
    }
}
