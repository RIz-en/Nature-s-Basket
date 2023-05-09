<section class="grid h-screen place-items-center">
    {{-- !Change pROFILE pICTURE --}}
    <div class="w-2/3 flex space-x-5">
        <aside class="w-1/3">
            <div class="flex flex-col items-center justify-center">
                <h1 class='text-center text-2xl'>Change Profile Picture</h1>

                <label for="image" class="text-5xl p-10 border border-dotted text-gray-700 cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </label>
                <div class=" h-full w-full">
                    <input form="myForm" type="file" name="image" id="image" accept="image/*"
                        class="sign_up_input_field w-full hidden">
                </div>

                {{-- !photo-preview --}}
                <img id="photo-preview" src="" alt="Preview Image"
                    style="max-width: 200px; max-height: 200px; display: none;">
                <script>
                    $(document).ready(function() {
                        $('#image').change(function() {
                            var value = $(this).val();
                            if (value) {
                                let reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#photo-preview').attr('src', e.target.result);
                                    $('#photo-preview').show();
                                }
                                reader.readAsDataURL(this.files[0]);
                            } else {
                                $('#photo-preview').hide();
                            }
                        });
                    });
                </script>


            </div>
        </aside>

        {{-- !Profile Settinga --}}
        <form action="/update/{{ $registration->id }}" method="post" enctype="multipart/form-data"
            class="flex flex-col space-y-1" id="myForm">
            @csrf
            @method('PATCH')
            <h1 class="text-center text-2xl">Profile Settings</h1>
            Name: <input type="text" name="name" value='{{ $registration->name }}' id=""
                class="sign_up_input_field">
            Phone no: <input type="text" name="phoneno" value='{{ $registration->phoneno }}' id=""
                class="sign_up_input_field">
            Email: <input type="text" name="email" value='{{ $registration->email }}' id=""
                class="sign_up_input_field">

            {{-- Password: <input type="password" name="password" value='{{ $registration->password }}' id=""
                class="sign_up_input_field"> --}}

            <h1>Select Address</h1>
            <select name="address" id="address" class="sign_up_input_field text-gray-500">
                {{-- <option value="" selected>Current Address</option> --}}
                <option value="swoyambhu" @if ($registration->address == 'swoyambhu') selected @endif>Swoyambhu</option>
                <option value="baneshwor" @if ($registration->address == 'baneshwor') selected @endif>Baneshwor</option>
                <option value="tahachal" @if ($registration->address == 'tahachal') selected @endif>Tahachal</option>
                <option value="chamati" @if ($registration->address == 'chamati') selected @endif>Chamati</option>
                <option value="lainchwor" @if ($registration->address == 'lainchwor') selected @endif>Lainchwor</option>
                <option value="dallu" @if ($registration->address == 'dallu') selected @endif>Dallu</option>
                <option value="kapan" @if ($registration->address == 'kapan') selected @endif>Kapan</option>

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


            <button type="submit" class="px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600">UPDATE</button>
        </form>

        {{-- !CAHNGE PASSWORD --}}
        <aside class="w-1/3 ">
            <h1 class="text-center text-2xl">Change Password</h1>
            <div>
                <div>
                    <label for="old_password">Old Password</label>
                    <input type="password" form="myForm" name="old_password" id="password"
                        class="sign_up_input_field">
                </div>
                <div>
                    <label for="password">New Password</label>
                    <input type="password" form="myForm" name="password" id="password"
                        class="sign_up_input_field">
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" form="myForm" name="password_confirmation" id="password"
                        class="sign_up_input_field">
                </div>
            </div>
        </aside>
    </div>


</section>
