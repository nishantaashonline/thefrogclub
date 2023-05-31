@extends('layouts.profile')

@section('content')
    <div class="mcontainer mt-5">

        <div class="mb-6">
            <h2 class="text-2xl font-semibold"> Profile Detail </h2>

        </div>
        <form action="{{route('basic_profile_update')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="grid lg:grid-cols-3 mt-12 gap-8">
            <div>
                <h3 class="text-xl mb-2 font-semibold"> Basic Detail</h3>
                <p> You have to fill for complete your profile</p>
            </div>

            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">

                <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                    <div class="col-span-2">
                        <label for="upload"> Upload Profile</label>

                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" name="profile_img">
                    </div>

                    <div>
                        <label for=""> Birth City</label>
                        <input type="text" placeholder="Birth City" class="shadow-none with-border" required name="birth_city">
                    </div>
                    <div>
                        <label for=""> Birth State</label>
                        <input type="text" placeholder="Birth State" class="shadow-none with-border" required name="birth_state">
                    </div>

                    {{-- <div class="col-span-2">
                                 <label for="about">About me</label>
                                 <textarea id="about" name="about" rows="3"  class="with-border"></textarea>
                             </div> --}}
                    <div class="col-span-2">
                        <label for=""> Birth Country </label>
                        <select id="relationship" name="birth_country" required class="shadow-none selectpicker with-border " name="birth_country">

                            <option value="1">Single</option>
                            <option value="2">In a relationship</option>
                            <option value="3">Married</option>
                            <option value="4">Engaged</option>
                        </select>
                    </div>
                    <div>
                        <label for=""> Mobile No.</label>
                        <input type="text" placeholder="" class="shadow-none with-border" name="phone">
                    </div>
                    <div>
                        <label for=""> DOB </label>
                        <input type="date" placeholder="" required class=" form-control shadow-none with-border" name="dob">
                    </div>
                </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">

                    <button type="submit" class="button bg-blue-700"> Save </button>
                </div>

            </div>




        </div>
    </form>
    </div>





    <!-- For Night mode -->


    <!-- Javascript
        ================================================== -->
@endsection
