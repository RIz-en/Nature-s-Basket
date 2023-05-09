<div class="sticky z-10 w-full top-0">
    <div class=" px-6 pb-1 pt-1 flex justify-between items-center text-center border-b-2 bg-white">
        <div class="">
           <a href="/">
            <x-website_logo></x-website_logo>
        </a>
        </div>

        <div
            class="navbar  md:flex justify-center md:space-x-4 lg:space-x-10 text-base text-white text-center md:text-black absolute top-32 right-0 md:static bg-green-500 md:bg-white w-full divide-y md:divide-y-0 md:divide-x divide-white/20 transition ease-in-out hidden">
            @foreach ($listings as $listing)
                <div class="py-1">
                    <a href="{{ URL::to($listing['href']) }} "
                        class="relative group hover:scale-110 ">{{ $listing['title'] }}
                        @php
                            if (str_contains(url()->current(), $listing['href'])) {
                                $scale = 'scale-x-100';
                            } else {
                                $scale = 'scale-x-0';
                            }
                        @endphp
                        <span
                            class="absolute inset-x-0 -bottom-1 h-1 bg-green-500 transform {{ $scale }} transition ease-out group-hover:scale-x-100"></span>
                    </a>
                </div>

                <br>
            @endforeach
        </div>



        <div class="flex text-sm relative items-center space-x-2 ">
            <div class="">
                <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500"
                    data-dropdown-trigger="hover"
                    class="text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg text-sm px-4 py-2.5 text-center  items-center "
                    type="button">
                    @if (auth()->user()->name != null)
                        {{ auth()->user()->name }}
                    @else
                        <h1>Welcome</h1>
                    @endif
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownDelay"
                    class="absolute -right-0 mt-1 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm " aria-labelledby="dropdownDelayButton">
                        <li>
                            <a href="/profile/{{ auth()->user()->id }}/edit"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>

                        <li>
                            @if (auth()->user()->roles == 'admin')
                                <a href="/dashboard"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            @endif
                        </li>

                        <li>
                            <a href="/checkout"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">CheckOut</a>
                        </li>

                        <li>
                            <a href="/logout"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                onclick="return confirm('Are you sure you want to logout?');">Log
                                out</a>
                        </li>
                    </ul>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#dropdownDelayButton').click(function() {
                            console.log('clicked');
                            $('#dropdownDelay').toggleClass('hidden');

                        });
                    });
                </script>
            </div>

            <div class="items-center">
                @php
                    $cart = session()->get('cart', []);
                    $count = count($cart);
                @endphp
                <div class="relative">
                    <a href="/cart"
                        class=" hover:scale-110 text-green-900 hover:text-white transition duration-75 ease-in-out "
                        data-te-toggle="cart" title="Cart">
                        <div
                            class=" bg-white hover:bg-green-900 border  rounded-full h-8 w-8 flex items-center justify-center">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </a>
                    <div
                        class="absolute -top-2 right-0 rounded-full h-4 w-4 bg-red-700 text-white text-xs flex flex-col justify-center items-center">
                        {{ $count }}
                    </div>
                </div>
            </div>
        </div>



    </div>

    {{-- !responsive mobile --}}
    <div class="md:hidden flex justify-between bg-white shadow-md shadow-gray-500 py-1 px-1">
        {{-- <div class="text-lg text-right pr-10 pb-2 backdrop-blur-sm  text-gray-800">
            @php
                $fullname = auth()->user()->name;
                $firstname = Str::of($fullname)
                    ->explode(' ')
                    ->first();
            @endphp
            Welcome {{ $firstname }}
        </div> --}}


        <div class="flex text-sm relative items-center space-x-2">
            <div>
                <button id="dropdownDelayButtons" data-dropdown-toggle="dropdownDelays" data-dropdown-delay="500"
                    data-dropdown-trigger="hover"
                    class="text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg text-sm px-4 py-2.5 text-center  items-center "
                    type="button">
                    @if (auth()->user()->name != null)
                        {{ auth()->user()->name }}
                    @else
                        <h1>Welcome</h1>
                    @endif
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownDelays"
                    class="absolute left-2 mt-1 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm " aria-labelledby="dropdownDelayButtons">
                        <li>
                            <a href="/profile/{{ auth()->user()->id }}/edit"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>

                        <li>
                            @if (auth()->user()->roles == 'admin')
                                <a href="/dashboard"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            @endif
                        </li>

                        <li>
                            <a href="/checkout"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">CheckOut</a>
                        </li>

                        <li>
                            <a href="/logout"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                onclick="return confirm('Are you sure you want to logout?');">Log
                                out</a>
                        </li>
                    </ul>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#dropdownDelayButtons').click(function() {
                            console.log('clicked');
                            $('#dropdownDelays').toggleClass('hidden');

                        });
                    });
                </script>
            </div>
        </div>


        <div class="flex items-center space-x-2">
            @if (auth()->user()->roles == 'admin')
                <div>
                    <a href="{{ route('dashboard') }}"><i class="fa-solid fa-user-secret text-2xl"></i> <span
                            class="hidden md:inline-block">Admin</span></a>
                </div>
            @endif
            <div class="md:hidden">
                <i class="fa-solid fa-bars p-2 bg-blue-500 text-white rounded-md" onclick="navshow()"></i>
            </div>

        </div>
    </div>
    <script>
        let list = $(".navbar");

        function navshow() {
            if (list.hasClass("hidden")) {
                list.removeClass("hidden");
            } else {
                list.addClass("hidden");
            }
        }
    </script>

</div>
