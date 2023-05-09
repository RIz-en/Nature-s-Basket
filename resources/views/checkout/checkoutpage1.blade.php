<x-layout>
    <div class="">
        <div class="w-full h-24 bg-gray-300 relative">
            <h1 class="text-3xl text-gray-700 absolute bottom-4 left-32">CHECKOUT</h1>
        </div>

        <div class="ml-5 md:ml-36 mr-5 md:mr-36 md:flex justify-center">

            {{-- #Delivery Credentials --}}
            <div class="w-3/4 space-y-2">
                {{-- !Delivery Address --}}
                <div class="border mt-2">
                    <div class="p-2 border-b">DELIVERY ADDRESS</div>
                    <div class="p-2">
                        <div class="p-1 flex border w-full space-x-2 text-sm">
                            <div class=" flex flex-col justify-center items-center">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <p class="text-green-700">Add Delivery Address</p>
                        </div>
                    </div>
                </div>

                {{-- !DELIVERY TIME AND DATE --}}
                <div class="border mt-2">
                    <div class="p-2 border-b">DELIVERY DATE AND TIME</div>
                    <div class="p-2">
                        <div class="p-1  w-full space-y-2">
                            <div class="flex border space-x-2 text-sm">
                                <div class=" flex flex-col justify-center items-center">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <p class="text-green-700">Add Date & Time</p>
                            </div>
                            <input type="checkbox" name="" id="" class="text-xs"> As Soon As Possible
                            <p class="text-xs">Note:Food Grocery Delivery Hours is from 08:00 AM to 9:00 PM</p>
                        </div>
                    </div>
                </div>

                {{-- !PAYMENT OPTION --}}
                <div class="border mt-2">
                    <div class="p-2 border-b">DELIVERY ADDRESS</div>
                    <div class="p-2">
                        <div class="p-1 flex border w-full space-x-2 text-sm">
                            <input type="radio" name="payement" id="" value="cash"> Cash On Delivery
                            <input type="radio" name="payement" id="" value="esewa"> ESewa

                        </div>
                    </div>
                </div>


                <section class="flex justify-between text-sm">
                    <a href="/cart" class="px-3 py-2 rounded-sm text-white bg-gray-400 hover:bg-gray-500">Go Back</a>
                    <a href="#"
                        class="px-3 py-2 rounded-sm text-white bg-green-500 hover:bg-green-600">Continue</a>
                </section>
            </div>

            {{-- #Cart Information --}}
            <aside class="bg-gray-200 h-full text-sm w-3/4 md:w-1/4 px-2 py-1 mt-2 ml-2">
                <div class="space-y-2">
                    <div class="flex border-b">
                        <h1>My Cart: <span class="text-green-700">Rs. {{ $totalprice }}</span>({{ $cartitems }}
                            items)</h1>
                    </div>

                    {{-- !cart-items --}}
                    <div class="pt-2">
                        @foreach ($cart as $item)
                            <div class="border-b text-gray-500 flex justify-between">
                                <h1 class="whitespace-nowrap  px-1">{{ $item['quantity'] }}x/kg</h1>
                                <h1 class="whitespace-nowrap  px-1">{{ $item['name'] }}</h1>
                                <h1 class="whitespace-nowrap  px-1">
                                    {{ $item['price'] * $item['quantity'] }}</h1>
                            </div>
                            <hr class="h-2">
                        @endforeach
                    </div>

                    {{-- !add more items --}}
                    <a href="/shop" class="text-green-700 pt-2">ADD MORE ITEMS +</a>

                    {{-- !Vat and Delivery charges --}}
                    <div class="flex justify-between pt-5">
                        <h1 class="text-gray-500">VAT</h1>
                        <h1>{{ $VAT_value }}</h1>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="text-gray-500">DELIVERY CHARGE</h1>
                        <h1>{{ $Delivery_charge }}</h1>
                    </div>

                    {{-- !Grand total --}}
                    <div class="flex justify-between pt-10">
                        <h1 class="text-gray-500">GRAND TOTAL</h1>
                        <h1 class="text-blue-700">Rs. {{ floatval($Delivery_charge) + floatval($VAT_value) +floatval($totalprice) }}</h1>
                    </div>
                </div>
            </aside>

        </div>

    </div>
</x-layout>
