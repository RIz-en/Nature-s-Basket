<x-admin>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Review
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset('storage/profiles/' . $review->user->filename) }}" alt="Image" class="object-cover rounded-full h-20 w-20">
                        </th>
                        <td class="px-6 py-4">
                            {{ $review->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{-- {{ $review->rating }} --}}
                            @php
                                $NoOfStars = intval($review->rating);
                            @endphp
                            @for ($i = 0; $i < $NoOfStars; $i++)
                                <i class="fas fa-star cursor-pointer text-yellow-400"></i>
                            @endfor
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->review }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin>
