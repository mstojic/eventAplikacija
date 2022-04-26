@csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Naziv')" />

                @if(@isset($category))
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $category->name }}" required autofocus />
                @else
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                @if(@isset($create))
                    <x-button class="ml-4">
                        {{ __('Kreirajte novu kategoriju') }}
                    </x-button>
                @else
                    <x-button class="ml-4">
                        {{ __('Uredite podatke o kategoriji') }}
                    </x-button>
                @endif
            </div>
