<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-60 py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        FLIGHT NO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STD DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STD TIME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESTINATION
                    </th>
                    <th scope="col" class="px-6 py-3">
                        AIRCRAFT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STATUS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ETD DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ETD TIME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BOARDING GATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BOARDING TIME
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $flight->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $flight->flightno }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->std_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->std_time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->airport->iata_code }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->aircraft->regno }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->etd_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->etd_time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->brd_gate }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flight->brd_time }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('flights.edit', $flight->id) }}"
                                class="font-medium text-orange-600 dark:text-orange-500 hover:underline">change
                                status</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('flights.destroy', $flight->id) }}"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
