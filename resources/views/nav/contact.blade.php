<x-layout>
    <div class=" w-full relative text-gray-900 pb-48">
        <img src="{{ asset('images/top-contact.jpg') }}" alt="" class="object-cover w-full h-80 ">
        <div class="grid grid-cols-2 w-3/4 md:w-1/2 border shadow-md place-items-center absolute top-52 left-20 md:left-80">
            <div class="space-y-3 bg-white p-3">
                <h1 class="font-semibold">ContactUs</h1>
                <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet cttur adig elit. Repus, omns?
                </p>
                <div class=" flex justify-between px-5 text-green-900">
                    <a href=""><img src="{{ asset('images_socialmedia/facebook.png') }}" alt="" class="social_icons"></a>
                    <a href=""><img src="{{ asset('images_socialmedia/instagram.png') }}" alt="" class="social_icons"></a>
                    <a href=""><img src="{{ asset('images_socialmedia/twitter.png') }}" alt="" class="social_icons"> </a>
                    <a href=""><img src="{{ asset('images_socialmedia/whatsapp.png') }}" alt="" class="social_icons"></a>
                    <a href=""><img src="{{ asset('images_socialmedia/pinterest.png') }}" alt="" class="social_icons"></a>
                </div>
                <div class="flex flex-col justify-center space-y-1 pt-2 text-sm">
                    <div class="flex space-x-2  items-center">
                        <img src="{{ asset('images_socialmedia/map.png') }}" alt="" class="social_icons">
                        <p class="">350 Bay Medows St.<br> Reynoldsburg, OH 43068</p>
                    </div>
                    <div class="flex space-x-2  items-center">
                        <img src="{{ asset('images_socialmedia/telephone.png') }}" alt="" class="social_icons">

                        <div class="text-gray-500">
                            <p>Mon-Fri 9:00 am - 7:00pm</p>
                            <p>+1-202-555-0168</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full w-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.265427807503!2d85.29390131474904!3d27.70908993202284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18f466f40131%3A0x9d6a601aad73079!2sDallu%20Aawas%20Marg%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sus!4v1674236808352!5m2!1sen!2sus"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="h-full w-full"></iframe>
            </div>
        </div>
    </div>
</x-layout>
