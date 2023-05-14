<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unboard FLight') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('flights.unboard') }}">
            @csrf

            <div class="text-red-500">
                @if ($errors->any())
                    {{ implode('', $errors->all(':message')) }}
                @endif
            </div>

            <div>
                <h1 class="text-blue-400">PASSENGER ID - {{ $passenger->id }}</h1>
            </div>

            <div>
                <h1 class="text-blue-400">PASSENGER NAME - {{ $passenger->firstname }} {{ $passenger->firstname }}</h1>
            </div>

            <!-- flightno-->
            <div>
                <x-text-input id="passengerID" class="block mt-1 w-full" type="hidden" name="passengerID"
                    value="{{ $passenger->id }}" required autofocus autocomplete="passengerID" />
                <x-input-error :messages="$errors->get('passengerID')" class="mt-2" />
            </div>

            <!-- flightno-->
            <div>
                <x-input-label for="pnrno" :value="__('PNR NO')" />
                <x-text-input id="pnrno" class="block mt-1 w-full" type="text" name="pnrno" :value="old('pnrno')"
                    required autofocus autocomplete="pnrno" />
                <x-input-error :messages="$errors->get('pnrno')" class="mt-2" />
            </div>

            <!-- seatno -->
            <div>
                <x-input-label for="seatno" :value="__('Seatno')" />
                <x-text-input id="seatno" class="block mt-1 w-full" type="number" name="seatno" :value="old('seatno')"
                    required autofocus autocomplete="seatno" />
                <x-input-error :messages="$errors->get('seatno')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Unboard Flight') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
