<?php

namespace App\Http\Livewire\Seller;

use App\Models\Order;
use Livewire\Component;

class SellerOrderDeatilsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {   
        $this->order_id = $order_id;   
    }
    public function render()
    {
        $order = Order::find($this->order_id);
        return view('livewire.seller.seller-order-deatils-component',['order'=>$order])->layout('layouts.base');
    }
}
