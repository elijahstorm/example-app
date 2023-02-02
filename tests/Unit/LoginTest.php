<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function login_form_exists_on_correct_page()
    {
        $this->get('/login')->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function can_login()
    {
        $email = 'test@gmail.com';
        $password = 'password';

        User::create([
            'name' => 'name',
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        Livewire::test('auth.login')
            ->set('email', $email)
            ->set('password', $password)
            ->call('login')
            ->assertHasNoErrors()
            ->assertRedirect('/');

        $this->assertEquals($email, auth()->user()->email);
    }

    /** @test */
    public function fails_when_provided_bad_credientials()
    {
        $email = 'test@gmail.com';
        $password = 'password';

        User::create([
            'name' => 'name',
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        Livewire::test('auth.login')
            ->set('email', $email)
            ->set('password', 'different_password')
            ->call('login');

        $this->assertEquals(null, auth()->user());
    }
}
