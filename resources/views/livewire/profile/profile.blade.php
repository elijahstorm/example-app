@extends('layouts.base')

<!-- alpine -->
@section('content')
<div class="mx-4 mt-8 mb-16">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
            </div>
        </div>

        <div class="mt-5 md:col-span-2 md:mt-0">

            <form wire:submit.prevent="save" action="#" method="POST">
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div>
                            <div>
                                @if (session()->has('error'))
                                <div class="bg-red-200 border border-red-500 text-red-500 px-4 py-2">
                                    {{ session('error') }}
                                    </p>
                                </div>
                                @endif
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Username</label>
                                <input wire:model="name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('name')
                                <span class="text-red-500 pt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input wire:model="email" type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('email')
                                <span class="text-red-500 pt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                                <div class="mt-1">
                                    <textarea wire:model="about" id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Brief description for your profile.</p>
                                @error('about')
                                <span class="text-red-500 pt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Photo</label>
                                <div class="mt-1 flex items-center">
                                    <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </span>
                                    <button type="button" class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>
                                </div>
                                @error('photo')
                                <span class="text-red-500 pt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="bg-bl-50 px-4 py-3 text-right sm:px-6 space-x-3">
                            <div class="contents">
                                @if (session()->has('notify-saved'))
                                <span class="inline text-indigo-500">
                                    Saved!
                                </span>
                                @endif
                            </div>

                            <a href="/profile" class="inline-flex justify-center rounded-md border border-gray-300 py-2 px-4 text-sm font-medium text-black shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Cancel</a>

                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection