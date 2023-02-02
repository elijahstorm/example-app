<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public string $autofocus = 'email';
    public bool $remember = false;

    public function login()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt(
            [
                'email' => $data['email'],
                'password' => $data['password']
            ]
        )) {
            session()->flash('error', 'email and password are wrong.');

            return;
        }

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
