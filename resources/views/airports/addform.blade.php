<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Airport') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('airports.add') }}">
            @csrf

            <!-- iata code-->
            <div>
                <x-input-label for="iata_code" :value="__('IATA CODE')" />
                <x-text-input id="iata_code" class="block mt-1 w-full" type="text" name="iata_code" :value="old('iata_code')"
                    required autofocus autocomplete="iata_code" />
                <x-input-error :messages="$errors->get('iata_code')" class="mt-2" />
            </div>

            <!-- name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- name -->
            <div>
                <x-input-label for="country" :value="__('Country')" />
                <select id="country"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="country">
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Add Airport') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
