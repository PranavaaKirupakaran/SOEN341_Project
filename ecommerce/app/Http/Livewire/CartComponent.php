<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cartlist-count-component', 'refreshcomponent');
        return redirect()->route('product.cart');
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cartlist-count-component', 'refreshcomponent');
        return redirect()->route('product.cart');
    }
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cartlist-count-component', 'refreshcomponent');
        session()->flash('success_message', 'Item has been removed');
        return redirect()->route('product.cart');
    }
    public function destroyall()
    {
        Cart::instance('cart')->destroy();
        session()->flash('success_message', 'Items has been removed');
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
