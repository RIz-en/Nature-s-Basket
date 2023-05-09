<x-layout>
    {{-- @auth --}}
        {{-- homepage layer 1 as soon you login --}}
        <x-homepage_layer1></x-homepage_layer1>

        {{-- welcome --}}
        @include('_partials._zeroth')


        {{-- products listout 10 items --}}
        <x-checkourproducts></x-checkourproducts>

        {{-- deal of the time with counter --}}
        <x-productcounter></x-productcounter>

        {{-- reviews slider --}}
        <x-review_slider></x-review_slider>

        {{-- newsletter --}}
        @include('_partials._newsletter')
    {{-- @endauth --}}
</x-layout>


