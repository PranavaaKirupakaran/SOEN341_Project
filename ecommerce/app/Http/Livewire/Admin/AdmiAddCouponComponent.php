<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdmiAddCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric'
        ]);
    }
    public function storeCoupon()
    {
        $this->validate([
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric'
        ]);
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->save();
        session()->flash('message', 'Coupon has been crreated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admi-add-coupon-component')->layout('layouts.base');
    }
}
