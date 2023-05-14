<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-60 py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Regno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Airline
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aircrafts as $aircraft)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $aircraft->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $aircraft->regno }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $aircraft->airline }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('aircrafts.destroy', $aircraft->id) }}"
                                class="font-medium text-blue-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
