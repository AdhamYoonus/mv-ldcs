<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CHECK IN PASSENGER') }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">
        <form method="POST" action="{{ route('apis.add') }}">
            @csrf

            <div class="text-red-500">
                @if ($errors->any())
                    {{ implode('', $errors->all(':message')) }}
                @endif
            </div>


            <!-- flightid-->
            <div>
                <x-text-input id="flightid" class="block mt-1 w-full" type="hidden" name="flightid"
                    value="{{ $passenger->flightid }}" required autofocus autocomplete="flightid" />
                <x-input-error :messages="$errors->get('flightid')" class="mt-2" />
            </div>

            <!-- passengerID-->
            <div>
                <x-text-input id="passengerID" class="block mt-1 w-full" type="hidden" name="passengerID"
                    value="{{ $passenger->id }}" required autofocus autocomplete="passengerID" />
                <x-input-error :messages="$errors->get('passengerID')" class="mt-2" />
            </div>

            <!-- seatno -->
            <div>
                <x-input-label for="seatno" :value="__('seatno')" />
                <x-text-input id="seatno" class="block mt-1 w-full" type="text" name="seatno" :value="old('seatno')"
                    required autofocus autocomplete="seatno" />
                <x-input-error :messages="$errors->get('seatno')" class="mt-2" />
            </div>

            <!-- dob -->
            <div>
                <x-input-label for="dob" :value="__('dob')" />
                <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')"
                    required autofocus autocomplete="dob" />
                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>

            <!-- gender -->
            <div>
                <x-input-label for="gender" :value="__('gender')" />
                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')"
                    required autofocus autocomplete="gender" />
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <!-- nationality -->
            <div>
                <x-input-label for="nationality" :value="__('nationality')" />
                <x-text-input id="nationality" class="block mt-1 w-full" type="text" name="nationality"
                    :value="old('nationality')" required autofocus autocomplete="nationality" />
                <x-input-error :messages="$errors->get('nationality')" class="mt-2" />
            </div>

            <!-- documentType -->
            <div>
                <x-input-label for="documentType" :value="__('documentType')" />
                <x-text-input id="documentType" class="block mt-1 w-full" type="text" name="documentType"
                    :value="old('documentType')" required autofocus autocomplete="documentType" />
                <x-input-error :messages="$errors->get('documentType')" class="mt-2" />
            </div>

            <!-- documentNo -->
            <div>
                <x-input-label for="documentNo" :value="__('documentNo')" />
                <x-text-input id="documentNo" class="block mt-1 w-full" type="text" name="documentNo"
                    :value="old('documentNo')" required autofocus autocomplete="documentNo" />
                <x-input-error :messages="$errors->get('documentNo')" class="mt-2" />
            </div>

            <!-- documentExpiry -->
            <div>
                <x-input-label for="documentExpiry" :value="__('documentExpiry')" />
                <x-text-input id="documentExpiry" class="block mt-1 w-full" type="date" name="documentExpiry"
                    :value="old('documentExpiry')" required autofocus autocomplete="documentExpiry" />
                <x-input-error :messages="$errors->get('documentExpiry')" class="mt-2" />
            </div>

            <!-- countryOfResidence -->
            <div>
                <x-input-label for="countryOfResidence" :value="__('Country of Residence')" />
                <select id="countryOfResidence"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="countryOfResidence">
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('countryOfResidence')" class="mt-2" />
            </div>

            <!-- countryOfIssue -->
            <div>
                <x-input-label for="countryOfIssue" :value="__('Country of Issue')" />
                <select id="countryOfIssue"
                    class="rounded-md shadow-sm bg-gray-700 text-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    type="text" name="countryOfIssue">
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('countryOfIssue')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Check In Passenger') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
