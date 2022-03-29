@extends('layouts.master')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="h-20 fill-current text-gray-500 d-none" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Ime')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Lozinka')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" name="roles[]"
                    type="checkbox" value="{{ $role->id }}" id="{{ $role->role_name }}">
                    <label class="form-check-label" for="{{ $role->role_name }}" >
                        {{ $role->role_name }}
                    </label>
                </div>
                @endforeach
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Kreirajte novog korisnika') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
