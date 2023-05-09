<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('JQUERY/jquery.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/productnumber.js') }}"></script>


    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            /* font-family: "Rubik"; */
            font-family: 'Signika Negative', sans-serif;
        }
    </style>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        import toastr from 'toastr';
    </script>
    <title>Grocery Bazaar</title>
</head>

<body class="overflow-x-hidden lazy ">
    @if (!Auth::check())
        <div class=" h-screen flex flex-col items-center justify-center space-y-2">
            <img src="{{ asset('pictures/47048.jpg') }}" alt="" class="h-72 w-72">
            <div class="font-bold text-gray-600 text-base hidden" id="home">
                <a href="/create" class="bg-blue-400 text-white px-4 py-2 hover:bg-blue-600 rounded-md">Register</a>
                <a href="/login" class="bg-blue-400 text-white px-4 py-2 hover:bg-blue-600 rounded-md">Login</a>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#home').fadeIn(2000);
            });
        </script>
    @endif
    @auth
        @include(
            '_partials._navbar',
            $listings = [
                ['title' => 'Home', 'href' => '/home'],
                ['title' => 'About Us', 'href' => '/about'],
                ['title' => 'Shop', 'href' => '/shop'],
                ['title' => 'Blog', 'href' => '/blog'],
                ['title' => 'Contact', 'href' => '/contact'],
            ]
        )
        <hr>
        {{-- @endauth --}}
        <div class="">
            {{-- !log out --}}
            {{-- <div class="fixed right-0 bottom-10 z-50">
                <a href="/logout"
                    class=" text-red-700 hover:text-white hover:scale-110 transition duration-75 ease-in-out "
                    onclick="return confirm('Are you sure you want to logout?');">
                    <div class="bg-white border  hover:bg-red-700 rounded-full h-8 w-8 flex items-center justify-center"
                        data-te-toggle="logout" title="LogOut"><i class="fa-solid fa-right-from-bracket"></i></div>
                </a> --}}
        </div>

        {{-- !main content --}}
        {{ $slot }}
        </div>
        {{-- @auth --}}
        <div class=" w-full bg-white">
            @include('_partials._footer')
        </div>
    @endauth
</body>



</html>
