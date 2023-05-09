<head>
    <link rel="stylesheet" href="css/app.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<x-admin>
    <div class="relative">
        <img src="{{ asset('pictures/itemsformbgimage.jpg') }}" alt="" class="h-full w-screen object-cover">
        <div class="absolute z-10 top-12 md:right-32 backdrop-blur-sm bg-white/30 p-5 rounded-md">
            <h1 class="font-semibold text-2xl text-white text-center">Input Product</h1>
            <form method="post" action="{{ route('itemsstore') }}" enctype="multipart/form-data"
                class="space-y-2 text-center">
                @csrf
                <input type="text" name="name" id="" class="sign_up_input_field w-full"
                    placeholder="Product-name"><br>
                <div class="md:flex justify-between space-x-2">
                    <input type="text" name="category" id="" class="sign_up_input_field w-full"
                        placeholder="Product-category"><br>
                    <input type="text" name="price" id="" class="sign_up_input_field w-full"
                        placeholder="Product-price"><br>
                </div>
                <input type="file" name="image" accept="image/*" class="sign_up_input_field">
                <button type="submit" class="bg-orange-500 text-white rounded-md px-2 py-1">Upload Image</button>
            </form>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <a href="/itemshow">GoTO itemgallery</a>
                </div>
            @endif
        </div>
    </div>
</x-admin>
