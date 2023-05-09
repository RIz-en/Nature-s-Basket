<head>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>
</head>

<x-admin>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-1 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center text-sm ">
                        <thead class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                            <tr>
                                <th scope="col" class=" px-6 py-4">#</th>
                                <th scope="col" class=" px-6 py-4">Name</th>
                                <th scope="col" class=" px-6 py-4">Category</th>
                                <th scope="col" class=" px-6 py-4">Price</th>
                                <th scope="col" class=" px-6 py-4">Product</th>
                                <th scope="col" class=" px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap  px-6">{{ $item->id }}</td>
                                    <td class="whitespace-nowrap  px-6">{{ $item->name }}</td>
                                    <td class="whitespace-nowrap  px-6">{{ $item->category }}</td>
                                    <td class="whitespace-nowrap  px-6">{{ $item->price }}</td>
                                    <td class="whitespace-nowrap  px-6 flex justify-center">
                                        <img src="{{ asset('storage/images/' . $item->filename) }}" width="100px"
                                            height="100px" alt="Image" class="">
                                    </td>
                                    <td class="whitespace-nowrap  px-6 py-2 ">
                                        <form action="/item/edit/{{ $item->id }}" method="get">
                                            @csrf
                                            <button type="submit" class="px-1 py-1 text-blue-500 font-bold"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                        </form>
                                        <form action="/item/destroy/{{ $item->id }}" method="post" class="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-1 py-1 text-red-500   font-bold"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>
