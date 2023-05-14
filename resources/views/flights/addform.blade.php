<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add FLight') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('flights.add') }}">
            @csrf

            <!-- flightno-->
            <div>
                <x-input-label for="flightno" :value="__('Flight No')" />
                <x-text-input id="flightno" class="block mt-1 w-full" type="text" name="flightno" :value="old('flightno')"
                    required autofocus autocomplete="flightno" />
                <x-input-error :messages="$errors->get('flightno')" class="mt-2" />
            </div>

            <!-- std_date -->
            <div>
                <x-input-label for="std_date" :value="__('STD Date')" />
                <x-text-input id="std_date" class="block mt-1 w-full" type="date" name="std_date" :value="old('std_date')"
                    required autofocus autocomplete="std_date" />
                <x-input-error :messages="$errors->get('std_date')" class="mt-2" />
            </div>

            <!-- std_time -->
            <div>
                <x-input-label for="std_time" :value="__('STD Time')" />
                <x-text-input id="std_time" class="block mt-1 w-full" type="time" name="std_time" :value="old('std_time')"
                    required autofocus autocomplete="std_time" />
                <x-input-error :messages="$errors->get('std_time')" class="mt-2" />
            </div>


            <!-- destination -->
            <div>
                <x-input-label for="destination" :value="__('Destination')" />
                <select id="destination"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="destination">
                    @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('destination')" class="mt-2" />
            </div>

            <!-- aircraftid -->
            <div>
                <x-input-label for="aircraftid" :value="__('Aircraft ID')" />
                <select id="aircraftid"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="aircraftid">
                    @foreach ($aircrafts as $aircraft)
                        <option value="{{ $aircraft->id }}">{{ $aircraft->regno }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('aircraftid')" class="mt-2" />
            </div>

            <!-- status -->
            <div>
                <x-input-label for="status" :value="__('Status')" />
                <select id="status"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="status">
                    <option value="Flight Created">Flight Created</option>
                    <option value="Check-in open">Check-in open</option>
                    <option value="Counter Close">Counter Close</option>
                    <option value="Boarding">Boarding</option>
                    <option value="Final Call">Final Call</option>
                    <option value="Gate Closed">Gate Closed</option>
                    <option value="Finalised">Finalised</option>
                </select>
                <x-input-error :messages="$errors->get('status')" class="mt-2" />
            </div>

            <!-- etd_date -->
            <div>
                <x-input-label for="etd_date" :value="__('ETD Date')" />
                <x-text-input id="etd_date" class="block mt-1 w-full" type="date" name="etd_date" :value="old('etd_date')"
                    required autofocus autocomplete="etd_date" />
                <x-input-error :messages="$errors->get('etd_date')" class="mt-2" />
            </div>

            <!-- etd_time -->
            <div>
                <x-input-label for="etd_time" :value="__('etd Time')" />
                <x-text-input id="etd_time" class="block mt-1 w-full" type="time" name="etd_time" :value="old('etd_time')"
                    required autofocus autocomplete="etd_time" />
                <x-input-error :messages="$errors->get('etd_time')" class="mt-2" />
            </div>

            <!-- brd_gate -->
            <div>
                <x-input-label for="brd_gate" :value="__('Boarding Gate')" />
                <x-text-input id="brd_gate" class="block mt-1 w-full" type="number" name="brd_gate" :value="old('brd_gate')"
                    required autofocus autocomplete="brd_gate" />
                <x-input-error :messages="$errors->get('brd_gate')" class="mt-2" />
            </div>

            <!-- brd_time -->
            <div>
                <x-input-label for="brd_time" :value="__('brd Time')" />
                <x-text-input id="brd_time" class="block mt-1 w-full" type="time" name="brd_time" :value="old('brd_time')"
                    required autofocus autocomplete="brd_time" />
                <x-input-error :messages="$errors->get('brd_time')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Add Flight') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
