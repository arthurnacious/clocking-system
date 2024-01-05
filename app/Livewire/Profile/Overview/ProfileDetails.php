<?php

namespace App\Livewire\Profile\Overview;

use Livewire\Component;

class ProfileDetails extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.profile.overview.profile-details');
    }
}
