@extends('layouts.auth')

@section('content')
<form wire:submit.prevent="login">
    @if (session()->has('error'))
    <span class="text-red-500 px-4 pt-2">
        {{ session('error') }}
    </span>
    @endif

    <!-- Email input -->
    <div class="mb-6">
        <input wire:model="email" type="text" required class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-red-500 @enderror" id="email" name="email" placeholder="Email address" />
        @error('email')
        <span class="text-red-500 px-4 pt-2">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password input -->
    <div class="mb-6">
        <input wire:model.lazy="password" type="password" required class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') border-red-500 @enderror" id="password" name="password" placeholder="Password" />
        @error('password')
        <span class="text-red-500 px-4 pt-2">{{ $message }}</span>
        @enderror
    </div>


    <div class="flex justify-between items-center mb-6">
        <div class="form-group form-check">
            <input wire:model="remember" type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="remember" />
            <label class="form-check-label inline-block text-gray-800" for="remember">Remember
                me</label>
        </div>
        <a href="#!" class="text-blue-500">Forgot password?</a>
    </div>

    <div class="text-center lg:text-left">
        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" value="Register">
            Login
        </button>
        <p class="text-sm font-semibold mt-2 pt-1 mb-0">
            Don't have an account?
            <a href="/register" class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Register</a>
        </p>
    </div>
</form>
@endsection