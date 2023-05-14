<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Passenger') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('passenger.add') }}">
            @csrf

            <!-- firstname-->
            <div>
                <x-input-label for="firstname" :value="__('FIRST NAME')" />
                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')"
                    required autofocus autocomplete="firstname" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- lastname -->
            <div>
                <x-input-label for="lastname" :value="__('lastname')" />
                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')"
                    required autofocus autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- ticketno -->
            <div>
                <x-input-label for="ticketno" :value="__('ticketno')" />
                <x-text-input id="ticketno" class="block mt-1 w-full" type="text" name="ticketno" :value="old('ticketno')"
                    required autofocus autocomplete="ticketno" />
                <x-input-error :messages="$errors->get('ticketno')" class="mt-2" />
            </div>

            <!-- pnrno -->
            <div>
                <x-input-label for="pnrno" :value="__('pnrno')" />
                <x-text-input id="pnrno" class="block mt-1 w-full" type="text" name="pnrno" :value="old('pnrno')"
                    required autofocus autocomplete="pnrno" />
                <x-input-error :messages="$errors->get('pnrno')" class="mt-2" />
            </div>

            <!-- ssrsno -->
            <div>
                <x-input-label for="ssrsno" :value="__('ssrsno')" />
                <x-text-input id="ssrsno" class="block mt-1 w-full" type="text" name="ssrsno" :value="old('ssrsno')"
                    autofocus autocomplete="ssrsno" />
                <x-input-error :messages="$errors->get('ssrsno')" class="mt-2" />
            </div>

            <!-- seqno -->
            <div>
                <x-input-label for="seqno" :value="__('seqno')" />
                <x-text-input id="seqno" class="block mt-1 w-full" type="number" name="seqno" :value="old('seqno')"
                    required autofocus autocomplete="seqno" />
                <x-input-error :messages="$errors->get('seqno')" class="mt-2" />
            </div>

            <!-- bagsandweight -->
            <div>
                <x-input-label for="bagsandweight" :value="__('bagsandweight')" />
                <x-text-input id="bagsandweight" class="block mt-1 w-full" type="text" name="bagsandweight"
                    :value="old('bagsandweight')" required autofocus autocomplete="bagsandweight" />
                <x-input-error :messages="$errors->get('bagsandweight')" class="mt-2" />
            </div>

            <!-- flightid -->
            <div>
                <x-text-input id="flightid" class="block mt-1 w-full" type="hidden" name="flightid"
                    value="{{ $flightid }}" required autofocus autocomplete="flightid" />
                <x-input-error :messages="$errors->get('flightid')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Add Passenger') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
