<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Livewire\Component;
use Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        return redirect()->route('product.cart');
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        return redirect()->route('product.cart');
    }
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        session()->flash('success_message', 'Item has been removed');
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        return redirect()->route('product.cart');
    }
    public function destroyall()
    {
        Cart::instance('cart')->destroy();
        session()->flash('success_message', 'Items has been removed');
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        return redirect()->route('product.cart');
    }

    public function switchToSaveForLater($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been save for later');
        return redirect()->route('product.cart');
    }

    

    public function moveToCart($rowId)
    {
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('cartlist-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been moved to Cart');
        return redirect()->route('product.cart');
    }

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        session()->flash('success_message', 'Item has been removed from Save for later');
        return redirect()->route('product.cart');
    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            session()->flash('status', 'Please Login To Continue Purchase!!');
            return redirect()->route('login', ['status']);
        }
    }

    public function setAmountForCheckout()
    {
        if (session()->has('coupon')) {
            session()->put('checkout', [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount
            ]);
        } else {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total
            ]);
        }
    }

    public function applyCouponCode()
    {
        $coupon = Coupon::where('code', $this->couponCode)->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if (!$coupon) {
            session()->flash('coupon_message', 'Coupon code is invalid!');
            return redirect()->route('product.cart');
        }

        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value
        ]);
        return redirect()->route('product.cart');
    }

    public function calculateDiscounts()
    {
        if (session()->has('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value']) / 100;
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax')) / 100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }

    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->calculateDiscounts();
            }
        }
        $this->setAmountForCheckout();

        // if(Auth::check())
        // {
        //     Cart::instance('cart')->store(Auth::user()->email);
        // }

        return view('livewire.cart-component')->layout('layouts.base');
    }
}
