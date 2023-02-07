@extends('layouts.auth')

@section('content')
<form wire:submit.prevent="register">

    <!-- Name input -->
    <div class="mb-6">
        <input wire:model.lazy="name" type="text" required class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('name') border-red-500 @enderror" id="name" name="name" placeholder="Username" />
        @error('name')
        <span class="text-red-500 px-4 pt-2">{{ $message }}</span>
        @enderror
    </div>

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

    <!-- Password confirmation input -->
    <div class="mb-6">
        <input wire:model="passwordConfirmation" type="password" required class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('passwordConfirmation') border-red-500 @enderror" id="passwordConfirmation" name="passwordConfirmation" placeholder="Password Confirmation" />
        @error('passwordConfirmation')
        <span class="text-red-500 px-4 pt-2">{{ $message }}</span>
        @enderror
    </div>


    <div class="text-center lg:text-left">
        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" value="Register">
            Register
        </button>
        <p class="text-sm font-semibold mt-2 pt-1 mb-0 hidden">
            Don't have an account?
            <a href="#!" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Register</a>
        </p>
    </div>
</form>
@endsection