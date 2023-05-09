<div class="grid md:grid-rows-none md:grid-cols-4 pt-10 px-16 md:px-10 lg:px-28 lg:gap-x-20 divide-y-4 md:divide-y-0 lg:pt-32">
    <!-- First Column -->
    <div class="space-y-3">
        <a href="/">
            <div class="py-2 flex justify-center"><x-website_logo></x-website_logo></div>
        </a>
        <div class=" flex   text-green-900 space-x-5 md:space-x-2 justify-center">
            <a href=""><img src="{{ asset('images_socialmedia/facebook.png') }}" alt="" class="social_icons"></a>
            <a href=""><img src="{{ asset('images_socialmedia/instagram.png') }}" alt="" class="social_icons"></a>
            <a href=""><img src="{{ asset('images_socialmedia/twitter.png') }}" alt="" class="social_icons"> </a>
            <a href=""><img src="{{ asset('images_socialmedia/whatsapp.png') }}" alt="" class="social_icons"></a>
            <a href=""><img src="{{ asset('images_socialmedia/pinterest.png') }}" alt="" class="social_icons"></a>
        </div>
        <div class="flex flex-col text-center justify-center space-y-1 pt-2 text-sm items-center">
            <div class="flex space-x-2 items-center ">
                <img src="{{ asset('images_socialmedia/map.png') }}" alt="" class="social_icons">
                <p class="">350 Bay Medows St.<br> Reynoldsburg, OH 43068</p>
            </div>
            <div class="flex space-x-2 items-center">
                <img src="{{ asset('images_socialmedia/telephone.png') }}" alt="" class="social_icons">

                <div class="text-gray-500">
                    <p>Mon-Fri 9:00 am - 7:00pm</p>
                    <p>+1-202-555-0168</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Column -->
    <div class=" space-y-3 py-2">
        <h1 class="font-bold text-lg text-green-700 text-center">Useful links</h1>
        <div class="text-gray-700 md:flex md:flex-col md:space-y-1 text-sm grid grid-cols-2 gap-y-2 text-center">
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
            <a href="/category">Shop By Category</a>
            <a href="/blog">From the Blog</a>
            <a href="/cart">Shopping Cart</a>
            <a href="">FAQs</a>
        </div>
    </div>

    <!-- Third Column -->
    <div class=" space-y-3 py-2">
        <h1 class="font-bold text-lg text-green-700 text-center">Customer Care</h1>
        <div class="text-gray-700 md:flex flex-col md:space-y-1  text-sm grid grid-cols-2 gap-y-2  text-center">
            <a href="/profile">My Account</a>
            <a href="/checkout">Payment & Delivery</a>
            <a href="/page/FAQ">FAQ</a>
            <a href="">Customer Support</a>
            <a href="">Our Partners</a>
            <a href="">Licenses & Payments</a>
        </div>
    </div>

    <!-- Fourth Column -->
    <div class=" space-y-3 py-2">
        <h1 class="font-bold text-lg  text-green-700 text-center">Product Categories</h1>
        <div class="text-gray-700 md:flex flex-col md:space-y-1  text-sm grid grid-cols-2 gap-y-2 text-center">
          <a href="/shop">Exotic Fruits</a>
          <a href="/shop">Vegetables</a>
      </div>
    </div>
</div>
<div class="bg-green-700  text-sm p-2 text-white text-center ">
    <p>Copyright &copy; Rijan.All rights preserved</p>
</div>



