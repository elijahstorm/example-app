<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function register_form_exists_on_correct_page()
    {
        $this->get('/register')->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function can_register()
    {
        $email = 'test@gmail.com';
        
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', $email)
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertRedirect('/')
        ;
        
        $this->assertTrue(User::whereEmail($email)->exists());

        $this->assertEquals($email, auth()->user()->email);
    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => 'required'])
        ;
    }

    /** @test */
    public function email_is_valid()
    {
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', 'name')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => 'email'])
        ;
    }

    /** @test */
    public function all_emails_are_uniqe()
    {
        User::create([
            'name' => 'name',
            'email' => 'first@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', 'first@gmail.com')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => 'unique'])
        ;
    }

    /** @test */
    public function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', 'first@gmail.com')
            ->set('password', '')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'required'])
        ;
    }

    /** @test */
    public function password_is_long_enough()
    {
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', 'first@gmail.com')
            ->set('password', 'sec')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min'])
        ;
    }

    /** @test */
    public function password_matches_password_confirmation()
    {
        Livewire::test('auth.register')
            ->set('name', 'name')
            ->set('email', 'first@gmail.com')
            ->set('password', 'sec')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'same'])
        ;
    }
}
