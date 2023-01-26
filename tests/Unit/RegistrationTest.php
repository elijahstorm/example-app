<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

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
            ->assertHasErrors('email')
        ;

        // 
    }
}
