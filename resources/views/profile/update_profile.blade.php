<section class="">
    {{-- !Change pROFILE pICTURE --}}
    <div class="px-10 md:flex space-x-5 justify-between">
        <aside class="">
            <div class="flex flex-col items-center justify-center">
                <h1 class='text-center text-2xl'>Change Profile Picture</h1>


                <label for="image" class="text-5xl p-10 border border-dotted text-gray-700 cursor-pointer hidden"
                    id="img">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </label>
                <div class=" h-full w-full">
                    <input form="myForm" type="file" name="image" id="image" accept="image/*"
                        class="sign_up_input_field w-full hidden">
                </div>

                @if (auth()->user()->filename == null)
                    <script>
                        $(document).ready(function() {
                            $('#img').removeClass('hidden');
                        })
                    </script>
                @endif

                {{-- !photo-preview --}}
                {{-- <img id="photo-preview" src="" alt="Preview Image" style="max-width: 200px; max-height: 200px; display: none;" onclick="$('#image').trigger('click')"> --}}

                {{-- !profile --}}
                <div class="">
                    @if (auth()->user()->filename != null)
                        <img id="photo-preview" src="{{ asset('storage/profiles/' . auth()->user()->filename) }}"
                            alt="Image" class="object-cover rounded-full h-48 w-48"
                            onclick="$('#image').trigger('click')">
                    @else
                        <img id="photo-preview" src="" alt="Preview Image"
                            style="max-width: 200px; max-height: 200px; display: none;"
                            onclick="$('#image').trigger('click')">
                    @endif
                </div>
                <div class=" py-5">
                    <h1 class="text-2xl">{{ auth()->user()->name }}</h1>
                    <h1 class="text-sm">{{ auth()->user()->email }}</h1>
                </div>



                <script>
                    $(document).ready(function() {
                        $('#image').change(function() {
                            var value = $(this).val();
                            if (value) {
                                let reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#photo-preview').attr('src', e.target.result);
                                    $('#photo-preview').show();
                                    $('#img').hide();
                                }
                                reader.readAsDataURL(this.files[0]);
                            } else {
                                $('#photo-preview').hide();
                                $('#img').show();
                            }
                        });
                    });
                </script>


            </div>
        </aside>

        {{-- !Profile Settinga --}}
        <form action="{{ route('update.profile', ['id' => $registration->id]) }}" method="post"
            enctype="multipart/form-data" class="flex flex-col space-y-1" id="myForm">
            @csrf
            @method('PATCH')
            <h1 class="text-center text-2xl">Profile Settings</h1>
            Name: <input type="text" name="name" value='{{ $registration->name }}' id=""
                class="sign_up_input_field">
            Phone no: <input type="text" name="phoneno" value='{{ $registration->phoneno }}' id=""
                class="sign_up_input_field">
            Email: <input type="text" name="email" value='{{ $registration->email }}' id=""
                class="sign_up_input_field">

            <h1>Select Address</h1>
            <select name="address" id="address" class="sign_up_input_field text-gray-500">
                {{-- <option value="" selected>Current Address</option> --}}
                <option value="swoyambhu" @if ($registration->address == 'swoyambhu') selected @endif>
                    Swoyambhu</option>
                <option value="baneshwor" @if ($registration->address == 'baneshwor') selected @endif>
                    Baneshwor</option>
                <option value="tahachal" @if ($registration->address == 'tahachal') selected @endif>
                    Tahachal</option>
                <option value="chamati" @if ($registration->address == 'chamati') selected @endif>
                    Chamati</option>
                <option value="lainchwor" @if ($registration->address == 'lainchwor') selected @endif>
                    Lainchwor</option>
                <option value="dallu" @if ($registration->address == 'dallu') selected @endif>
                    Dallu</option>
                <option value="kapan" @if ($registration->address == 'kapan') selected @endif>
                    Kapan</option>

            </select>
            <div class="">
                <input type="radio" name="sex" value='Male' id="male"
                    @if ($registration->sex == 'Male') checked @endif
                    class="border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="male">Male</label>
                <input type="radio" name="sex" value='Female' id="female"
                    @if ($registration->sex == 'Female') checked @endif
                    class="border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="female">Female</label>

            </div>

            <div class="text-sm  text-gray-500">
                <input type="date" name="date" id="" class="sign_up_input_field"
                    placeholder="Date of Birth" value={{ $registration->date }}>
            </div>


            <button type="submit" form="myForm" class="px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600">UPDATE</button>
        </form>

        {{-- !CHANGE PASSWORD --}}
        <aside class="w-full md:w-1/3 mt-5">
            <form method="POST" action="{{ route('update.password', ['id' => $registration->id]) }}" id="myForm2">
                @csrf
                @method('PATCH')
                <h1 class="text-center text-2xl">Change Password</h1>
                <div>
                    <div>
                        <label for="old_password">Old Password</label><br>
                        <input type="password"  name="old_password" id="old_password"
                            class="sign_up_input_field"><br>
                        @error('old_password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="password">New Password</label><br>
                        <input type="password"  name="password" id="password"
                            class="sign_up_input_field">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password</label><br>
                        <input type="password"  name="password_confirmation"
                            id="password_confirmation" class="sign_up_input_field"><br>
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" form="myForm2"
                    class="px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600">UPDATE</button>
                @if (session()->has('success'))
                    <div class="my-2 bg-lime-500/90 text-white border-current rounded-lg p-4 w-max">
                        {{ session('success') }}
                    </div>
                @endif

            </form>

        </aside>
    </div>


</section>
