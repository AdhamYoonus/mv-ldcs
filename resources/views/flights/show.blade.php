<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Flights - {{ $flight->flightno }}
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

        <div class='mt-10 max-w-md space-y-6 flex'>

            <a target='' href='{{ route('passenger.addform', $flight) }}'
                class='group font-medium tracking-wide select-none text-base relative inline-flex items-center justify-center cursor-pointer h-12 border-2 border-solid py-0 px-6 rounded-md overflow-hidden z-10 transition-all duration-300 ease-in-out outline-0 bg-blue-500 text-white border-blue-500 hover:text-blue-500 focus:text-blue-500'>
                <strong class='font-medium'>ADD PASSENGER</strong>
                <svg class="ml-1 rotate-180 fill-white group-hover:fill-blue-500" width="27" height="27"
                    viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M17.6954 12.4962L21.6468 12.1467C22.5335 12.1467 23.2525 12.8727 23.2525 13.7681C23.2525 14.6635 22.5335 15.3895 21.6468 15.3895L17.6954 15.04C16.9997 15.04 16.4357 14.4705 16.4357 13.7681C16.4357 13.0645 16.9997 12.4962 17.6954 12.4962">
                    </path>
                    <path
                        d="M4.42637 12.5604C4.48813 12.4981 4.71885 12.2345 4.93559 12.0157C6.19989 10.6449 9.50107 8.40347 11.228 7.71751C11.4902 7.60808 12.1532 7.37512 12.5086 7.35864C12.8477 7.35864 13.1716 7.43748 13.4804 7.59279C13.8661 7.81046 14.1738 8.15403 14.3439 8.55878C14.4522 8.83882 14.6224 9.68009 14.6224 9.69539C14.7913 10.6143 14.8834 12.1086 14.8834 13.7606C14.8834 15.3325 14.7913 16.7656 14.6527 17.6999C14.6375 17.7163 14.4674 18.76 14.2821 19.1177C13.943 19.7719 13.28 20.1766 12.5704 20.1766H12.5086C12.046 20.1613 11.0742 19.7554 11.0742 19.7413C9.43931 19.0553 6.21621 16.9221 4.92044 15.5043C4.92044 15.5043 4.55455 15.1396 4.39608 14.9125C4.14904 14.5854 4.02552 14.1806 4.02552 13.7759C4.02552 13.3241 4.16419 12.904 4.42637 12.5604">
                    </path>
                </svg>
                <span
                    class='absolute bg-white bottom-0 w-0 left-1/2 h-full -translate-x-1/2 transition-all ease-in-out duration-300 group-hover:w-[105%] -z-[1] group-focus:w-[105%]'></span>
            </a>

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

                            @if ($passenger->status == null)
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('apis.addform', ['passengerid' => $passenger->id]) }}"
                                        class="font-medium text-green-600 dark:text-green-500 hover:underline">CHECK
                                        IN</a>
                                </td>
                            @else
                                <td class="px-6 py-4">

                                </td>
                            @endif

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
