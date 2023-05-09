<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/productnumber.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: "Rubik";
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<div class="flex flex-col justify-center items-center py-10  space-y-3">
    @php
        use App\Models\FullItems;
        $items = FullItems::all();
        $filteritemsonly10 = $items->random(10);
    @endphp
    <div>
        <h1 class="text-sm text-gray-500 text-center">Customer's Choice</h1>
        <p class="text-4xl font-semibold">Check Our Products</p>
    </div>
    <div class="grid grid-cols-3 md:grid-cols-5 gap-y-10 mt-12">
        @foreach ($filteritemsonly10 as $only10)
            <div class="flex flex-col items-center justify-center shadow-md shadow-gray-200 pb-2 h-40 md:h-48 w-32 md:w-48">
                <img src="{{ asset('storage/images/' . $only10->filename) }}" width="120px" height="120px" alt="Image"
                    class="h-16 md:h-28 w-16 md:w-32 aspect-square">
                <h1 class="mt-3">{{ $only10['name'] }}</h1>
                <span class="text-gray-900">Rs. {{ $only10['price'] }}/kg</span>
            </div>
        @endforeach
    </div>
    <div class="text-right mt-4">
        <a href="/shop">
            <h1 class="underline text-xs hover:text-blue-700">See More</h1>
        </a>
    </div>
</div>
