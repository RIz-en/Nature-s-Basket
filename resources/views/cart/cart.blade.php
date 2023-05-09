{{-- <link rel="stylesheet" href="css/app.css"> --}}

<x-layout>

    <div class=" h-full md:h-screen bg-gray-300 md:grid md:place-items-center px-2 mt-5">
        <div class="md:flex shadow-md shadow-gray-700 w-full md:w-1/2 divide-x-2">
            <div class="h-48 md:h-96 w-full md:w-4/5 rounded-md  text-center bg-white relative p-2 overflow-y-scroll overflow-x-hidden">
                <h1 class="font-bold">Your Order</h1>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-1 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-center text-sm font-semibold">
                                    <thead class="border-b bg-neutral-50 text-gray-700">
                                        <tr>
                                            <th scope="col" class=" px-1 py-1">Product</th>
                                            <th scope="col" class=" px-1 py-1">Price</th>
                                            <th scope="col" class=" px-1 py-1">Quantity</th>
                                            <th scope="col" class=" px-1 py-1">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" overflow-y-scroll">
                                            @foreach ($cart as $item)
                                            <tr class="border-b text-gray-500">
                                                {{-- <td class="whitespace-nowrap  px-1">{{$item['filename']}}></td> --}}
                                                <td class="whitespace-nowrap  px-1">{{ $item['name'] }}</td>
                                                <td class="whitespace-nowrap  px-1">{{ $item['price'] }}</td>
                                                <td class="whitespace-nowrap  px-1">{{ $item['quantity'] }}</td>
                                                <td class="whitespace-nowrap  px-1">
                                                    {{ $item['price'] * $item['quantity'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="h-48 md:h-96 w-full md:w-2/5 rounded-md p-2 ">

                <h1 class="font-bold text-center">SUMMARY</h1>
                <div class="h-full w-full flex justify-center flex-col items-center text-xl">
                    <img src="{{ asset('images/139-basket-lineal.gif') }}" alt="" class="rounded-md h-24 w-24">
                    <p><span class="font-bold">Total Items: </span>{{ $cartitems }}</p>
                    <p><span class="font-bold">Total Price: Rs </span>{{ $totalprice }}</p>
                    <div class=" grid place-items-center">
                        @if (session()->has('success'))
                            <div class=" bg-lime-500/90 text-white border-current rounded-lg p-1 w-max text-sm">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="flex justify-center text-sm space-x-2 py-5">
            <a href="{{ route('cartclear') }}" class=" transition duration-75 ease-in-out text-red-700"
                data-te-toggle="clear" title="clear"><i class="fa-solid fa-trash"></i></a>
            <a href="/shop" class=" underline ">Back to Shop</a>
            <a href="{{ route('checkout') }}" class=" underline">Proceed to payment</a>
        </div>
    </div>
</x-layout>
