@extends('layouts.app')

@section('content')
<div class="main_content">
    <div class="mcontainer">

        <div class="mb-6">
            <h2 class="text-2xl font-semibold"> Add Family Member </h2>

        </div>
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">

            {!! \Session::get('success') !!}

    </div>
@endif

        <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="grid lg:grid-cols-2 mt-12 gap-8">

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

                            <option value="1">India</option>
                            <option value="2">Napel</option>
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
                    <div >
                        <label for=""> Relation </label>
                        <select id="relationship" name="relation" required class="shadow-none selectpicker with-border " name="birth_country">

                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>

                        </select>
                    </div>
                    <div >
                        <label for=""> DOB </label>
                        <input type="date" placeholder="" required class=" form-control shadow-none with-border" name="dob">
                    </div>
                </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                    {{-- <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button> --}}
                    <button type="submit" id="submit" class="button bg-blue-700"> Save </button>
                </div>

             </div>



        </div>
        </form>
    </div>
</div>

@endsection
