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

<div class="flex flex-wrap" id="tabs-id">
    <div class="w-full">
      <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal " onclick="changeAtiveTab(event,'tab-profile')">
           Exotic-Fruits
          </a>
        </li>
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal " onclick="changeAtiveTab(event,'tab-settings')">
            Vegetables
          </a>
        </li>
      </ul>
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
        <div class="px-4 py-5 flex-auto">
          <div class="tab-content tab-space">
            <div class="block" id="tab-profile">
                <div class="grid grid-cols-5 gap-y-10 mt-10">
                    @foreach ($filterfruits as $item)
                        <div class="flex flex-col items-center justify-center shadow-md shadow-gray-200 pb-2 ">
                            <img src="{{ asset('storage/images/' . $item->filename) }}" width="120px" height="120px"
                                alt="Image" class="h-24 w-28 aspect-square">
                            <h3>{{ $item['name'] }}</h3>
                            <p>Price: {{ $item['price'] }}/kg</p>

                            <form method="POST" action="/cart/add">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                                <input type="hidden" name="filename" value="{{ $item['filename'] }}">
                                <input type="hidden" name="name" value="{{ $item['name'] }}">
                                <input type="hidden" name="category" value="{{ $item['category'] }}">
                                <input type="hidden" name="price" value="{{ $item['price'] }}">

                                <button type="button" class="minus py-2 px-3 border rounded-md "><i
                                        class="fa-solid fa-minus"></i></button>

                                <input type="text" name="quantity" value="1" required readonly
                                    class="productcount p-1 border border-background rounded-md text-black w-8 text-center ">

                                <button type="button" class="plus py-2 px-3 border rounded-md "><i
                                        class="fa-solid fa-plus"></i></button>

                                <button type="submit" class="bg-orange-500 text-white rounded-md px-3 py-2 button_popup"><i
                                        class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="hidden" id="tab-settings">
                <div class="grid grid-cols-5 gap-y-10 mt-10">
                    @foreach ($filterveggie as $item)
                        <div class="flex flex-col items-center justify-center shadow-md shadow-gray-200 pb-2">
                            <img src="{{ asset('storage/images/' . $item->filename) }}" width="120px" height="120px"
                                alt="Image" class="h-24 w-28 aspect-square">
                            <h3>{{ $item['name'] }}</h3>
                            <p>Price: {{ $item['price'] }}/kg</p>

                            <form method="POST" action="/cart/add">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                                <input type="hidden" name="filename"
                                    value="{{ asset('/storage/images/' . $item->filename) }}">
                                <input type="hidden" name="name" value="{{ $item['name'] }}">
                                <input type="hidden" name="category" value="{{ $item['category'] }}">
                                <input type="hidden" name="price" value="{{ $item['price'] }}">
                                <button type="button" class="minus py-2 px-3 border rounded-md "><i
                                        class="fa-solid fa-minus"></i></button>

                                <input type="text" name="quantity" value="1" required readonly
                                    class="productcount p-1 border border-background rounded-md text-black w-8 text-center ">

                                <button type="button" class="plus py-2 px-3 border rounded-md "><i
                                        class="fa-solid fa-plus"></i></button>
                                <button type="submit" class="bg-orange-500 text-white rounded-md px-4 py-2"><i
                                        class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function changeAtiveTab(event,tabID){
      let element = event.target;
      while(element.nodeName !== "A"){
        element = element.parentNode;
      }
      ulElement = element.parentNode.parentNode;
      aElements = ulElement.querySelectorAll("li > a");
      tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
      for(let i = 0 ; i < aElements.length; i++){
        // aElements[i].classList.remove("text-black");
        // aElements[i].classList.remove("bg-red-600");
        // aElements[i].classList.add("text-red-600");
        // aElements[i].classList.add("bg-blue-500");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
      }
    //   element.classList.remove("text-red-600");
    //   element.classList.remove("bg-blue-500");
    //   element.classList.add("text-blue-500");
    //   element.classList.add("bg-red-600");
      document.getElementById(tabID).classList.remove("hidden");
      document.getElementById(tabID).classList.add("block");
    }
  </script>
<script src="{{ asset('js/productnumber.js') }}"></script>

