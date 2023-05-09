<x-admin>
    <div class="mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

            <div class="shadow-md shadow-gray-500 flex  bg-white ">
                <div class="h-full w-1 bg-green-500">
                </div>
                <div class="p-5 text-xl md:text-3xl rounded-full text-green-500 h-full flex flex-col items-center justify-center">
                    <i class="fa-solid fa-carrot"></i>
                </div>
                <div class="py-6">
                    <h1 class="text-base md:text-2xl font-semibold text-green-500">Vegetables</h1>
                    {{$vegetablecount}}
                </div>
            </div>

            <div class="shadow-md shadow-gray-500 flex  bg-white ">
                <div class="h-full w-1 bg-red-500">
                </div>
                <div class="p-5 text-xl md:text-3xl rounded-full text-red-500 h-full flex flex-col items-center justify-center">
                    <i class="fa-solid fa-apple-whole"></i>
                </div>
                <div class="py-6">
                    <h1 class="text-base md:text-2xl font-semibold text-red-500">Fruits</h1>
                    {{$fruitcount}}
                </div>
            </div>

            <div class="shadow-md shadow-gray-500 flex  bg-white ">
                <div class="h-full w-1 bg-purple-500">
                </div>
                <div class="p-5 text-xl md:text-3xl rounded-full text-purple-500 h-full flex flex-col items-center justify-center">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="py-6">
                    <h1 class="text-base md:text-2xl font-semibold text-purple-500">Customers</h1>
                    {{$users->count()}}
                </div>
            </div>

            <div class="shadow-md shadow-gray-500 flex bg-white ">
                <div class="h-full w-1 bg-blue-500">
                </div>
                <div class="p-5 text-xl md:text-3xl rounded-full text-blue-500 h-full flex flex-col items-center justify-center">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="py-6">
                    <h1 class="text-base md:text-2xl font-semibold text-blue-500">Subscriptions</h1>
                    {{$subscriptionscount}}
                </div>
            </div>
        </div>
    </div>
</x-admin>
