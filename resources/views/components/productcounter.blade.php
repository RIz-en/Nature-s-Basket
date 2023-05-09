
<div class="flex flex-col justify-center bg-gray-100 pb-14">
    <div class="flex justify-center w-full space-x-5 pt-14">
        <div class="flex flex-col items-end justify-center w-3/12 space-y-2 border-b-2 border-b-white">
            <p class="text-sm">Nature's Basket Deal Of The Day</p>
            <p class="text-xl">GRANNY SMITH <span class="font-bold">25%</span> off</p>
        </div>
        <img src="{{ asset('pictures/Granny Smith.png') }}" alt="" class="h-24 w-24 border-b-2 border-b-green-800">
        <div class=" text-sm flex flex-col items-center justify-center w-3/12 border-b-2 border-b-white">
            <p>The flavor of Granny Smith can best be described as crisp with a strong tartness that’s reminiscent of lemons. </p>
        </div>
    </div>
    <div class="flex justify-center mt-7">
        <p id="demo" class="text-3xl font-bold text-green-800"></p>
    </div>

    {{-- layer-2 of the homepage --}}
    @include('_partials._layer2')
</div>



<script>
    // Set the date we're counting down to
    var countDownDate = new Date("June 5, 2023 01:15:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
