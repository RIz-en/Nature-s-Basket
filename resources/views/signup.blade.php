<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: "Rubik";
        }
    </style>
</head>

<body class="overflow-hidden">
    <div class="grid h-screen place-items-center">
        <div class="rounded-md shadow-md shadow-gray-500 w-3/4 md:w-1/4 text-gray-500">
            <div class="">
                <img src="{{ asset('pictures/login11.png') }}" alt="" class="object-cover h-48 w-full">
            </div>
            <div class=" flex flex-col space-y-3 p-7">
                <div class="flex justify-between items-center">
                    <h1 class="font-semibold text-2xl">Register</h1>
                </div>
                <form action="/store" method="post" class="w-full flex flex-col space-y-3">
                    @csrf
                    <div>
                        <input type="text" name="email" id="" placeholder="Email"
                            class="w-full border rounded-md p-2">
                        <div>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" autocomplete="current-password"
                            class="w-full border rounded-md p-2">
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" id="password" placeholder="Confirm Password" autocomplete="current-password"
                            class="w-full border rounded-md p-2">
                        <div>
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="bg-green-500 text-white w-full px-4 py-2 rounded-md">Register</button>
                </form>

                {{-- <div class="flex justify-between">
                    <span>
                        <input type="checkbox" name="" id=""> Remember Me
                    </span>
                    <a href="#">Forgot Password</a>
                </div> --}}

                <div class="text-center">
                    Already a member? <span class="text-green-500 font-semibold">
                        <a href="/login">Login</a></span>
                </div>
            </div>
            @if (session()->has('success'))
            <div class="my-2 bg-lime-500/90 text-white border-current rounded-lg p-4 w-max">
                {{ session('success') }}
                <button class="p-2 text-white underline"><a href="/login">Login</a></button>
            </div>
        @endif
        </div>
    </div>
</body>

</html>
