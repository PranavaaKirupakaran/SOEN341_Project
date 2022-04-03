<?php

namespace App\Http\Livewire\User;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }

        return view('livewire.user.user-profile-component', ['user' => $user])->layout('layouts.base');
    }
}
