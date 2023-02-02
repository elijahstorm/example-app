<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', App\Http\Livewire\profile\profile::class);
    Route::get('/dashboard', App\Http\Livewire\profile\dashboard::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', App\Http\Livewire\auth\register::class);
    Route::get('/login', App\Http\Livewire\auth\login::class)->name('login');
});
