<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
    <script src="{{ asset('JQUERY/jquery.min.js') }}"></script>

</head>

<body class="overflow-hidden">
    @include(
            '_partials._navbar',
            $listings = [
                ['title' => 'Home', 'href' => ''],
                ['title' => 'About Us', 'href' => '/about'],
                ['title' => 'Shop', 'href' => '/productstocart'],
                ['title' => 'Blog', 'href' => '/blog'],
                ['title' => 'Contact', 'href' => '/contact'],
            ]
        )
    <div class="h-screen w-screen flex flex-col md:flex-row">

        <aside class="w-full md:w-1/5 bg-gray-800 text-base text-white">

            <div class="ml-5 mr-5 flex md:flex-col ">
                <a href="{{ route('dashboard') }}" class="adminsidebar"><i class="fa-solid fa-chart-line"></i>
                    Dashboard</a>
                <a href="{{ route('index') }}" class="adminsidebar"><i class="fa-solid fa-users"></i> Users</a>
                <div class="group border-b-2 py-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <i class="fa-solid fa-bag-shopping"></i> Products
                        </div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>

                    <div class="group-hover:flex hidden flex-col">
                        <ul>
                            <li class="ml-8 mr-5 adminsidebar"><a href="{{ route('itemsform') }}">Product Form</a></li>
                            <li class="ml-8 mr-5 adminsidebar"><a href="{{ route('itemshow') }}">Product List</a></li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('newsletterusers') }}" class="adminsidebar"><i class="fa-solid fa-envelope"></i>
                    Newsletter</a>
                <a href="{{ route('review_show') }}" class="adminsidebar"><i class="fa-solid fa-envelope"></i>
                    Review</a>
            </div>
        </aside>
        <div class="w-full overflow-y-auto px-2">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
