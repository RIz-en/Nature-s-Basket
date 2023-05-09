<x-layout>
    <div class="container mx-auto flex flex-wrap" id="tabs-id">
        <div class="w-full flex">
            <div class="">
                <ul class="flex flex-col mb-0 list-none  pt-3 pb-4">
                    {{-- <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold  px-5 py-3  rounded block leading-normal text-white bg-pink-600"
                            onclick="changeAtiveTab(event,'tab-profile')">
                            Profile
                        </a>
                    </li> --}}
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold  px-5 py-3  rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                            onclick="changeAtiveTab(event,'tab-settings')">
                            Profile
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold  px-5 py-3  rounded block leading-normal text-pink-600 bg-white cursor-pointer"
                            onclick="changeAtiveTab(event,'tab-options')">
                            Review
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6  rounded">
                <div class="px-4 py-5 flex-auto">
                    <div class="tab-content tab-space">
                        {{-- <div class="block" id="tab-profile">
                            @include('profile.profile')
                        </div> --}}
                        <div class="block" id="tab-settings">
                            @include('profile.update_profile')
                        </div>
                        <div class="hidden" id="tab-options">
                            @include('profile.customer_review_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for (let i = 0; i < aElements.length; i++) {
                aElements[i].classList.remove("text-white");
                aElements[i].classList.remove("bg-pink-600");
                aElements[i].classList.add("text-pink-600");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-pink-600");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-pink-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>
</x-layout>
