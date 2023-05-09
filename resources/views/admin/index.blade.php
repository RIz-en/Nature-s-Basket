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
                    {{-- <td>ID</td> --}}
                    <th scope="col" class=" px-1 py-1">#</th>
                    <th scope="col" class=" px-1 py-1">Name</th>
                    <th scope="col" class=" px-1 py-1">Phone No</th>
                    <th scope="col" class=" px-1 py-1">Email</th>
                    <th scope="col" class=" px-1 py-1">Roles</th>
                    <th scope="col" class=" px-1 py-1">Address</th>
                    <th scope="col" class=" px-1 py-1">Sex</th>
                    <th scope="col" class=" px-1 py-1">D.O.B</th>
                    <th scope="col" class=" px-1 py-1">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrations as $registration)
                    <tr class="border-b text-gray-500 text-center">
                        {{-- <td>{{ $registration->id }}</td> --}}
                        <td class="whitespace-nowrap  px-1 py-2"><div
                            class="border rounded-full h-8 w-8 flex items-center justify-center overflow-hidden">
                            @if ($registration->filename == null)
                            <img src="https://api.dicebear.com/6.x/bottts-neutral/svg?seed={{ $registration->email }}" alt="Image" class="object-cover h-8 w-8 rounded-full">
                            @else{
                                <img src="{{ asset('storage/profiles/' . $registration->filename) }}" width="100px"
                                                height="100px" alt="Image" class="object-cover">
                            }
                            @endif

                        </div></td>
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->name }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->phoneno }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->email }}</td>
                        {{-- <td class="whitespace-nowrap  px-1 py-2">{{ $registration->roles }}</td> --}}
                        @php
                            if($registration->roles == 'admin'){
                                echo '<td class="whitespace-nowrap px-1 py-2 text-green-600">' . $registration->roles . '</td>';
                            }
                            else{
                                echo '<td class="whitespace-nowrap px-1 py-2 text-blue-600">' . $registration->roles . '</td>';
                            }
                        @endphp
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->address }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->sex }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">{{ $registration->date }}</td>
                        <td class="whitespace-nowrap  px-1 py-2">
                            <form action="/destroy/{{ $registration->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white p-2 rounded-md"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        <td class="whitespace-nowrap  px-1 py-2">
                            <form action="/edit/{{ $registration->id }}" method="get">
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
