@csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Naziv')" />

                @if(@isset($location))
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $location->name }}" required autofocus />
                @else
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                @if(@isset($create))
                    <x-button class="ml-4">
                        {{ __('Kreirajte novu lokaciju') }}
                    </x-button>
                @else
                    <x-button class="ml-4">
                        {{ __('Uredite podatke o lokaciji') }}
                    </x-button>
                @endif
            </div>
