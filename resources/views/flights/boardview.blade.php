<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            BOARDING - Flights - {{ $flight->flightno }}
        </h2>
    </x-slot>
    <div class="py-20 px-60">

        {{-- hidden field for id --}}
        <x-text-input id="id" class="block mt-1 w-full" type="hidden" name="id" value="{{ $flight->id }}"
            required autofocus autocomplete="id" />
        <x-input-error :messages="$errors->get('id')" class="mt-2" />

        <div>
            <h1 class="text-blue-400">FLIGHT ID - {{ $flight->id }}</h1>
        </div>

        <!-- flightno-->
        <div>
            <h1 class="text-blue-400">FLIGHT NO - {{ $flight->flightno }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">STD DATE - {{ $flight->std_date }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">STD TIME - {{ $flight->std_time }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">DESTINATION - {{ $flight->destination }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">AIRCRAFT ID - {{ $flight->aircraftid }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">STATUS - {{ $flight->status }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">ETD DATE - {{ $flight->etd_date }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">ETD TIME - {{ $flight->etd_time }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">BOARDING GATE - {{ $flight->brd_gate }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400">BOARDING TIME - {{ $flight->brd_time }}</h1>
        </div>

        <div>
            <h1 class="text-blue-400"></h1>
        </div>

        {{-- TABLE --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-20">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            FIRST NAME
                        </th>
                        <th scope="col" class="px-6 py-3">
                            LAST NAME
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SEAT NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            TICKET NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PNR NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SSRS NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SEQ NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BAG WIEGHT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            STATUS
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($passengers as $passenger)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $passenger->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $passenger->firstname }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->lastname }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->seatno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->ticketno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->pnrno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->ssrsno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->seqno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->bagsandweight }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $passenger->status }}
                            </td>
                            @if ($passenger->status == 'Boarded')
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('flights.unboardform', $passenger->id) }}"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">UNBOARD</a>
                                </td>
                            @else
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('flights.boardform', $passenger->id) }}"
                                        class="font-medium text-orange-600 dark:text-orange-500 hover:underline">BOARD</a>
                                </td>
                            @endif


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
