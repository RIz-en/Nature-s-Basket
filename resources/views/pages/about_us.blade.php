<x-layout>
    {{-- about us header --}}
    <div class=" w-full relative  text-gray-900">
        <img src="{{ asset('images/9.jpeg') }}" alt="" class="object-cover w-full h-48 opacity-90 ">
        <p class="font-semibold text-5xl absolute top-14 left-1/3 text-white">About Us</p>
    </div>

    {{-- portfolio --}}
    <div class="pt-16 pb-10 text-gray-900">
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-2 gap-y-5 gap-x-5 place-items-center px-5 md:px-48">
            <div class="space-y-1">
                <div class="font-semibold text-3xl">If you keep good food in your<br>fridge, you will eat good food</div>
                <hr class="bg-green-700 h-1 w-32">
                <p class="text-sm text-gray-700 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    At explicabo aut optio ex cumque harum debitis itaque eius repellat quisquam distinctio facere
                    reiciendis, dolorem, dolor magnam consectetur voluptatibus! Suscipit officiis consequuntur beatae
                    est cupiditate? Porro aspernatur, inventore, voluptatibus ea molestiae perspiciatis obcaecati labore
                    cumque eius animi maxime asperiores, sunt nulla.</p>
                <h1 class="text-xl font-semibold">Rijan Maharjan</h1>
                <p class="text-sm text-gray-400">Owner and Founder</p>
            </div>
            <div class="w-full"><img src="{{ asset('images/about_1.jpg') }}" alt=""
                    class="h-80 w-full rounded-md"></div>
            <div class="w-full"><img src="{{ asset('images/about_2.jpg') }}" alt=""
                    class="h-80 w-full rounded-md"></div>
            <div>
                <div class="space-y-1">
                    <div class="font-semibold text-3xl">Our taste - Our identity</div>
                    <hr class=" bg-green-700 h-1 w-32">
                    <p class="text-sm text-gray-700 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. At explicabo aut optio ex harum debitis itaque eius repellat quisquam distinctio
                        facerevoluptatibus ea molestiae asperiores, sunt nulla.</p>

                </div>
            </div>
        </div>
    </div>

    {{-- quality services --}}
    {{-- <div class=" w-full relative  text-gray-900 pt-10 pb-10">
        <img src="{{ asset('images/about_3.jpg') }}" alt="" class="object-cover w-full h-72 opacity-90">
        <div class="absolute top-16 grid grid-cols-3 gap-10 px-72">
            <div class="qs_flex">
                <div class="qs_icons">
                    <i class="fa-solid fa-thumbs-up text-white "></i>
                </div>
                <h1 class="font-semibold text-center">Qualtiy & Fresh Products</h1>
                <p class=" text-sm text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem
                    provident doloremque nobis molestias maiores?</p>
            </div>
            <div class="qs_flex">
                <div class="qs_icons">
                    <i class="fa-solid fa-seedling text-white "></i>
                </div>
                <h1 class="font-semibold text-center">Qualtiy & Fresh Products</h1>
                <p class=" text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem
                    provident doloremque nobis molestias maiores?</p>
            </div>
            <div class="qs_flex">
                <div class="qs_icons">
                    <i class="fa-solid fa-medal text-white "></i>
                </div>
                <h1 class="font-semibold text-center">Qualtiy & Fresh Products</h1>
                <p class=" text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem
                    provident doloremque nobis molestias maiores?</p>
            </div>
        </div>
    </div> --}}



</x-layout>
