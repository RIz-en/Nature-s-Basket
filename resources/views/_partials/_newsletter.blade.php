<div class="pb-10 pt-10">
    <div class=" flex absolute">
        <img src="{{ asset('img_newsletter/1.jpg') }}" alt="" class="h-60 w-1/3 md:w-56">
        <img src="{{ asset('img_newsletter/2.jpg') }}" alt="" class="h-60 w-1/3 md:w-56">
        <img src="{{ asset('img_newsletter/3.jpg') }}" alt="" class="h-60 w-1/3 md:w-56">
        <img src="{{ asset('img_newsletter/4.jpg') }}" alt="" class="h-60 md:w-56 hidden md:block">
        <img src="{{ asset('img_newsletter/5.jpg') }}" alt="" class="h-60 md:w-56 hidden md:block">
        <img src="{{ asset('img_newsletter/6.jpg') }}" alt="" class="h-60 md:w-56 hidden md:block">
    </div>
    <div class="flex items-center justify-center space-x-20 pt-10 relative top-1/2">
        <div class="bg-blue-200/30 p-5 backdrop-blur-md">
            <div class="text-white">
                <p class="font-semibold text-xl text-right">Save 20% on first shopping</p>
                <p class="text-sm font-semibold text-right">Sign Up to Newsletter</p>

            </div>
            <form action="{{ route('newsletterstore') }}" method="post" class="flex border">
                @csrf
                <input type="email" name="email" id="" placeholder="Email" class="p-1 w-60">
                <button type="submit" class="bg-green-700 text-white px-3 py-2"><i
                        class="fa-solid fa-paper-plane pr-1"></i>Subscribe</button>
            </form>
            <div>
                <div class="text-red-800">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="text-green-800">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>


            </div>
        </div>



    </div>
</div>
