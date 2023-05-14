<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Aircraft') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('aircrafts.add') }}">
            @csrf

            <!-- Regno -->
            <div>
                <x-input-label for="regno" :value="__('Regno')" />
                <x-text-input id="regno" class="block mt-1 w-full" type="text" name="regno" :value="old('regno')"
                    required autofocus autocomplete="regno" />
                <x-input-error :messages="$errors->get('regno')" class="mt-2" />
            </div>

            <!-- airlines -->
            <div class="mt-4">
                <x-input-label for="airline" :value="__('airline')" />
                <x-text-input id="airline" class="block mt-1 w-full" type="text" name="airline" :value="old('airline')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('airline')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Add Aircraft') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
