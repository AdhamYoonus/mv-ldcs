<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Country') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('countries.add') }}">
            @csrf

            <!-- country name-->
            <div>
                <x-input-label for="name" :value="__('Country Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- country code -->
            <div>
                <x-input-label for="code" :value="__('Country Code')" />
                <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')"
                    required autofocus autocomplete="code" />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Add Country') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
