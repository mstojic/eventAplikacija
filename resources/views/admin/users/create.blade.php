@extends('layouts.master')

@section('content')
<x-guest-layout>
    <x-form-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="h-20 fill-current text-gray-500 d-none" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <p class="form-heading">Kreiranje novog korisnika<p>
        <form method="POST" action="{{ route('admin.users.store') }}">
            @include('admin.users.partials.form', ['create' => true])
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection