@extends('layouts.profile')

@section('content')
    <div class="mcontainer mt-5">

        <div class="mb-6">
            <h2 class="text-2xl font-semibold"> Profile Update </h2>

        </div>
        <form action="{{$formurl}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="grid lg:grid-cols-3 mt-12 gap-8">
            <div>
                <h3 class="text-xl mb-2 font-semibold"> Add {{$name}}</h3>
                <p> Please Add {{$name}} to Move Ahead</p>
            </div>

            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">

                <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                    <div class="col-span-2">
                        <label for="upload"> Upload Profile</label>

                        <input type="file" class="custom-file-input form-control" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" name="image">
                    </div>

                    <div class="col-span-2">
                        <label for=""> Name</label>
                        <input type="text" placeholder="Name" class="shadow-none with-border" required name="name">
                    </div>

                    <div>
                        <label for=""> Birth City</label>
                        <input type="text" placeholder="Birth City" class="shadow-none with-border" required name="birth_city">
                    </div>
                    <div>
                        <label for=""> Birth State</label>
                        <input type="text" placeholder="Birth State" class="shadow-none with-border" required name="birth_state">
                    </div>


                    <div class="col-span-2">
                        <label for=""> Birth Country </label>
                        <select id="relationship" name="birth_country" required class="shadow-none selectpicker with-border " name="birth_country">

                            <option value="1">Single</option>
                            <option value="2">In a relationship</option>
                            <option value="3">Married</option>
                            <option value="4">Engaged</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                       <label for=""> Live Status</label>
                       {{--   <input type="text" placeholder="" class="shadow-none with-border" name="phone"> --}}


                     <div class="d-flex">
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" value="1" id="flexCheckDefault" checked name="live">
                            <label class="form-check-label" for="flexCheckDefault">
                             Live
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" id="flexCheckChecked" name="live">
                            <label class="form-check-label" for="flexCheckChecked">
                              Pass Away
                            </label>
                          </div>
                     </div>

                    </div>
                    <div class="col-span-2">
                        <label for=""> DOB </label>
                        <input type="date" placeholder="" required class=" form-control shadow-none with-border" name="dob">
                    </div>
                </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">

                    <button type="submit" id="submit" class="button bg-blue-700"> Next </button>
                </div>

            </div>




        </div>
    </form>
    </div>

<script>
    if(window.location.pathname=='/add-mother'){
document.getElementById('submit').innerHTML ='Finish';
    }
    console.log(window.location.pathname);
</script>
@endsection
