<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SellerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.seller-dashboard-component')->layout('layouts.base');
    }
}
