<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto Slab', serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<x-admin>
    <div class="flex text-center flex-col justify-center  p-2 shadow-md">
        <table border="0" cellspacing="10">
            <thead class="border-b bg-neutral-50 text-gray-700">
                <tr>
                    <th scope="col" class=" px-1 py-1">Email</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletterusers as $newsletteruser)
                    <tr class="border-b text-gray-500 text-center">
                        <td class="whitespace-nowrap  px-1 py-2">{{ $newsletteruser->email }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">
                            <form action="/newsletterdestroy/{{ $newsletteruser->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white p-2 rounded-md"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        <td class="whitespace-nowrap  px-1 py-2">
                            <form action="/edit/{{ $newsletteruser->id }}" method="get">
                                @csrf
                                <button type="submit" class="bg-blue-600 text-white p-2 rounded-md "><i
                                        class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
</x-admin>
