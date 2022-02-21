<?php

namespace App\Http\Livewire\Seller;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerProfileComponent extends Component
{
    public function render()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id); 
        return view('livewire.seller.seller-profile-component', ['user'=>$user])->layout('layouts.base');
    }
}