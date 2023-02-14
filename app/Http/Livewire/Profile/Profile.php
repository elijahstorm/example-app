<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $name = '';
    public $about = '';
    public $email = '';
    public $photo = '';

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->about = auth()->user()->about;
        $this->email = auth()->user()->email;
        // $this->photo = auth()->user()->photo;
    }

    public function save()
    {
        $profileData = $this->validate([
            'name' => 'required|max:24',
            'about' => 'max:140',
            'email' => 'required|email',
            // 'photo' => 'photo',
        ]);

        auth()->user()->update($profileData);

        session()->flash('notify-saved');
    }

    public function render()
    {
        return view('livewire.profile.profile');
    }
}
