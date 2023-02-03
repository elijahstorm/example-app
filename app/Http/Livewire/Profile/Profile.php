<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $name = '';
    public $about = '';
    public $email = '';

    public function save()
    {
        $profileData = $this->validate([
            'name' => 'max:24',
            'about' => 'max:140',
        ]);

        auth()->user()->update($profileData);
    }

    public function render()
    {
        return view('livewire.profile.profile');
    }
}
