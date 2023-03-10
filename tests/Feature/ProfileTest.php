<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_see_profile_component_on_page()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/profile')
            ->assertSuccessful()
            ->assertSeeLivewire('profile.profile');
    }

    /** @test */
    public function can_update_profile()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test('profile.profile')
            ->set('name', 'foo')
            ->set('about', 'bar')
            ->call('save');

        $user->refresh();

        $this->assertEquals('foo', $user->name);
        $this->assertEquals('bar', $user->about);
    }

    /** @test */
    public function username_must_be_less_than_24_characters()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test('profile.profile')
            ->set('name', str_repeat('a', 25))
            ->set('about', 'bar')
            ->call('save')
            ->assertHasErrors('name', 'max');
    }

    /** @test */
    public function about_must_be_less_than_140_characters()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test('profile.profile')
            ->set('name', 'name')
            ->set('about', str_repeat('a', 141))
            ->call('save')
            ->assertHasErrors('about', 'max');
    }

    /** @test */
    public function profile_data_shows_when_profile_viewed()
    {
        $user = User::factory()->create([
            'name' => 'foo',
            'about' => 'bar',
            'email' => 'car',
            // 'photo' => 'zar',
        ]);

        Livewire::actingAs($user)
            ->test('profile.profile')
            ->assertSet('name', 'foo')
            ->assertSet('about', 'bar')
            ->assertSet('email', 'car')
            // ->assertSet('photo', 'zar')
        ;
    }

    /** @test */
    public function message_is_shown_on_save()
    {
        $user = User::factory()->create([
            'name' => 'foo',
            'about' => 'bar',
            'email' => 'car@gmail.com',
            // 'photo' => 'zar',
        ]);

        Livewire::actingAs($user)
            ->test('profile.profile')
            ->assertDontSee('Profile saved')
            ->call('save')
            ->assertSee('Profile saved');
    }
}
