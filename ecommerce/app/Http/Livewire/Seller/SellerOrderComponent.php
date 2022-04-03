<?php

namespace App\Http\Livewire\Seller;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SellerOrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order =Order::find($order_id);
        $order->status = $status;
        if($status == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }
        else if($status=="canaceled")
        {
            $order->canceled_date = DB::rae('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully!');
    }
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(6);
        return view('livewire.seller.seller-order-component',['orders'=>$orders])->layout('layouts.base');
    }
}
