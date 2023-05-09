<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            /* font-family: "Rubik"; */
            font-family: 'Signika Negative', sans-serif;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<div class="h-full relative overflow-hidden">
    <div class="flex justify-center">
        <div>
            <img src="{{ asset('pictures/FAQ-PNG-Transparent.png') }}" alt="">
        </div>
        <div class="w-1/3 flex flex-col justify-center">
            <div class="">
                <h1 class="font-bold text-3xl">FAQ</h1>
                <hr class="bg-purple-600 h-1 w-7">
            </div>

            {{-- !question & answer section --}}
            <div class="text-sm text-gray-800 pt-4">
                {{-- 1st Question --}}
                <div class="border-b py-1">
                    <section class="flex justify-between">
                        <h1 class="font-bold ">How do I place an order?</h1>
                        <i class="click fa-solid fa-plus"></i>
                    </section>

                    <p class="click-para text-gray-700 hidden ">To place an order, simply add the desired items to your
                        cart and proceed to checkout. You will be prompted to enter your delivery address, choose a
                        delivery time slot, and make payment.</p>
                </div>
                {{-- 2nd Question --}}
                <div class="border-b py-1">
                    <section class="flex justify-between">
                        <h1 class="font-bold ">What are the delivery options and costs?</h1>
                        <i class="click fa-solid fa-plus"></i>
                    </section>

                    <p class="click-para text-gray-700 hidden ">We offer different delivery options such as standard delivery, express delivery, and same-day delivery, with varying costs depending on your location and the delivery option selected. You can view the delivery options and costs at checkout before placing your order.</p>
                </div>
                {{-- 3rd Question --}}
                <div class="border-b py-1">
                    <section class="flex justify-between">
                        <h1 class="font-bold ">What is your return policy?</h1>
                        <i class="click fa-solid fa-plus"></i>
                    </section>

                    <p class="click-para text-gray-700 hidden ">We have a flexible return policy. If you are not satisfied with your order, you can return it within a specified period for a refund or exchange. Please refer to our Returns & Refunds page for more information.</p>
                </div>
                {{-- 4th Question --}}
                <div class="border-b py-1">
                    <section class="flex justify-between">
                        <h1 class="font-bold ">Can I modify my order after it has been placed?</h1>
                        <i class="click fa-solid fa-plus"></i>
                    </section>

                    <p class="click-para text-gray-700 hidden ">Unfortunately, we are unable to modify orders once they have been placed. However, you can cancel the order and place a new one with the desired changes.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.click').click(function() {
                $('.click-para').not($(this).parent().next('.click-para')).addClass('hidden');
                $(this).toggleClass('transform 0.3s ease-in-out rotate-45 text-red-800');
                $(this).parent().next('.click-para').toggleClass('hidden');
            });
        });
    </script>
    {{-- !wave --}}
    <div class="">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 250" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(69.54, 87.64, 191.157, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(149.072, 115.155, 209.372, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,50L120,62.5C240,75,480,100,720,95.8C960,92,1200,58,1440,50C1680,42,1920,58,2160,62.5C2400,67,2640,58,2880,75C3120,92,3360,133,3600,129.2C3840,125,4080,75,4320,83.3C4560,92,4800,158,5040,191.7C5280,225,5520,225,5760,225C6000,225,6240,225,6480,208.3C6720,192,6960,158,7200,120.8C7440,83,7680,42,7920,29.2C8160,17,8400,33,8640,45.8C8880,58,9120,67,9360,62.5C9600,58,9840,42,10080,33.3C10320,25,10560,25,10800,25C11040,25,11280,25,11520,37.5C11760,50,12000,75,12240,70.8C12480,67,12720,33,12960,50C13200,67,13440,133,13680,141.7C13920,150,14160,100,14400,66.7C14640,33,14880,17,15120,37.5C15360,58,15600,117,15840,133.3C16080,150,16320,125,16560,104.2C16800,83,17040,67,17160,58.3L17280,50L17280,250L17160,250C17040,250,16800,250,16560,250C16320,250,16080,250,15840,250C15600,250,15360,250,15120,250C14880,250,14640,250,14400,250C14160,250,13920,250,13680,250C13440,250,13200,250,12960,250C12720,250,12480,250,12240,250C12000,250,11760,250,11520,250C11280,250,11040,250,10800,250C10560,250,10320,250,10080,250C9840,250,9600,250,9360,250C9120,250,8880,250,8640,250C8400,250,8160,250,7920,250C7680,250,7440,250,7200,250C6960,250,6720,250,6480,250C6240,250,6000,250,5760,250C5520,250,5280,250,5040,250C4800,250,4560,250,4320,250C4080,250,3840,250,3600,250C3360,250,3120,250,2880,250C2640,250,2400,250,2160,250C1920,250,1680,250,1440,250C1200,250,960,250,720,250C480,250,240,250,120,250L0,250Z">
            </path>
        </svg>
    </div>
</div>
