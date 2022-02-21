<?php

namespace App\Http\Livewire\Seller;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerEditProfileComponent extends Component
{
    public $name;
    public $email;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $postal;
    public $newimage;
    
    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->image = $user->profile->image;
        $this->line1 = $user->profile->line1;
        $this->line2 = $user->profile->line2;
        $this->city = $user->profile->city;
        $this->province = $user->profile->province;
        $this->country = $user->profile->country;
        $this->postal = $user->profile->postal;
    }
    
    public function render()
    {
        return view('livewire.seller.seller-edit-profile-component')->layout('layouts.base');
    }
}