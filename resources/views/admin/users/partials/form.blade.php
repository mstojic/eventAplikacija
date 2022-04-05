@csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Ime')" />

                @if(@isset($user))
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                @else
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @endif
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                @if(@isset($user))
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required autofocus />
                @else
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                @endif
            </div>

            <!-- Password -->
            @isset($create)
            <div class="mt-4">
                <x-label for="password" :value="__('Lozinka')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Potvrdite lozinku')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"
                                required autocomplete="new-password" />
            </div>
            @endisset

            <div class="mt-4">
                @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" name="roles[]"
                    type="checkbox" value="{{ $role->id }}" id="{{ $role->role_name }}" @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
                    <label class="form-check-label" for="{{ $role->role_name }}" >
                        {{ $role->role_name }}
                    </label>
                </div>
                @endforeach
            </div>

            <div class="flex items-center justify-end mt-4">
                @if(@isset($create))
                    <x-button class="ml-4">
                        {{ __('Kreirajte novog korisnika') }}
                    </x-button>
                @else
                    <x-button class="ml-4">
                        {{ __('Uredite podatke o korisniku') }}
                    </x-button>
                @endif
            </div>