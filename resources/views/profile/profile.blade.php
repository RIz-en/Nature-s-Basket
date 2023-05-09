<div class="flex justify-center flex-col items-center">
    <div class="">
        @if (auth()->user()->filename != null)
            <img src="{{ asset('storage/profiles/' . auth()->user()->filename) }}"
                alt="Image" class="object-cover rounded-full h-32 w-32">
        @else
            <img src="https://api.dicebear.com/6.x/bottts-neutral/svg?seed={{ auth()->user()->email }}"
                alt="" class="object-fit rounded-full">
        @endif
    </div>
    <div class=" py-5">
        <h1 class="text-2xl">{{ auth()->user()->name }}</h1>
        <h1 class="text-sm">{{ auth()->user()->email }}</h1>
    </div>
    {{-- <a href="/profile/{{ auth()->user()->id }}/edit"
        class="text-gray-700 p-2 rounded-full  py-2 px-3  text-xs ">Update Your Profile</a> --}}
</div>
