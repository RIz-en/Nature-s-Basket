<form action="{{ route('review_store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col space-y-2">
        <span class="text-gray-600 font-medium mr-2">Rate our Service:</span>
        <div class="hidden">
            <input type="number" name="user_id" id="" value = "{{ Auth()->user()->id }}">
        </div>
        <div class="flex items-center text-2xl">
            <input type="hidden" id="rating" name="rating" value="0">
            <i class="far fa-star cursor-pointer text-yellow-400 hover:text-yellow-500" data-star="1"></i>
            <i class="far fa-star cursor-pointer text-yellow-400 hover:text-yellow-500" data-star="2"></i>
            <i class="far fa-star cursor-pointer text-yellow-400 hover:text-yellow-500" data-star="3"></i>
            <i class="far fa-star cursor-pointer text-yellow-400 hover:text-yellow-500" data-star="4"></i>
            <i class="far fa-star cursor-pointer text-yellow-400 hover:text-yellow-500" data-star="5"></i>
        </div>
        <div>
            @error('rating')
                {{$message }}
            @enderror
        </div>
        <textarea  id="" cols="30" rows="5" name="review" placeholder="Review" class="border-2 p-1"></textarea>
        <div>
            @error('review')
                {{$message }}
            @enderror
        </div>

        {!! Form::submit('Submit', ['class'=>'px-3 py-2 text-white bg-red-400 hover:bg-red-500 cursor-pointer']) !!}
    </div>
    @if (session()->has('success'))
                        <div class="my-2 bg-lime-500/90 text-white border-current rounded-lg p-4 w-max">
                            {{ session('success') }}
                            {{-- <button class="p-2 text-white underline"><a href="/login">Login</a></button> --}}
                        </div>
                    @endif
</form>
<div>
    @if(auth()->user()->review !=null )
        <h1>You have already reviewed our services. Thank you</h1>
    @endif
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('i.fa-star').click(function() {
            // Set the value of the hidden rating input
            $('#rating').val($(this).data('star'));

            // Update the styling of the stars based on the selected rating
            $('i.fa-star').removeClass('fas').addClass('far');
            $(this).prevAll('i.fa-star').addClass('fas').removeClass('far');
            $(this).addClass('fas').removeClass('far');
        });
    });
</script>
