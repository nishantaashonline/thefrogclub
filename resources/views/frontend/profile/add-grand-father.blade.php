@extends('layouts.profile')

@section('content')

            {{-- <div class="mcontainer mt-5">

                <div class="mb-6">
                    <h2 class="text-2xl font-semibold"> Add Member </h2>

                </div>
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">

                        {!! \Session::get('success') !!}

                    </div>
                @endif
                <form action="{{ $formurl }}" method="post" enctype="multipart/form-data" id="form_id">
                    @csrf
                    <input type="hidden" id="action" value="next" name="action">
                    <div class="grid lg:grid-cols-3 mt-12 gap-8">
                        <div>
                            <h3 class="text-xl mb-2 font-semibold"> Add {{ $name }}</h3>
                            <p> Please Add {{ $name }} to Move Ahead</p>

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
                                    <input type="text" placeholder="Name" class="shadow-none with-border" required
                                        name="name">
                                </div>

                                <div>
                                    <label for=""> Birth City</label>
                                    <input type="text" placeholder="Birth City" class="shadow-none with-border" required
                                        name="birth_city">
                                </div>
                                <div>
                                    <label for=""> Birth State</label>
                                    <input type="text" placeholder="Birth State" class="shadow-none with-border" required
                                        name="birth_state">
                                </div>


                                <div class="col-span-2">
                                    <label for=""> Birth Country </label>
                                    <select id="relationship" name="birth_country" required
                                        class="shadow-none selectpicker with-border " name="birth_country">

                                        <option value="1">Single</option>
                                        <option value="2">In a relationship</option>
                                        <option value="3">Married</option>
                                        <option value="4">Engaged</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for=""> Live Status</label>



                                    <div class="d-flex">
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="radio" value="1"
                                                id="flexCheckDefault" checked name="live">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Alive
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0"
                                                id="flexCheckChecked" name="live">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Pass Away
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-2">
                                    <label for=""> Married Status</label>



                                    <div class="d-flex">
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="radio" value="1"
                                                id="flexCheckDefault" checked name="married">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Married
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0"
                                                id="flexCheckChecked" name="married">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Unmarried
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-2">
                                    <label for=""> DOB </label>
                                    <input type="date" placeholder="" required
                                        class=" form-control shadow-none with-border" name="dob">
                                </div>
                            </div>

                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <a href="{{ $skipurl }}" class="p-2 px-4 rounded bg-gray-50 text-red-500"> Skip </a>
                                <a class="btn bg-blue-700 text-white" onclick="addmore()"> Add more </a>
                                <button type="submit" id="submit" class="btn text-white bg-blue-700">Save & Next </button>
                            </div>

                        </div>




                    </div>
                </form>
            </div> --}}
<div class="row">
    <div class="col-md-4">
        <div class="account-setting-form">
            <h3 class="text-xl mb-2 font-semibold"> Add {{ $name }}</h3>
            <p> Please Add {{ $name }} to Move Ahead</p>

        </div>
    </div>
    <div class="col-md-8">
        <form class="account-setting-form" action="{{ $formurl }}" method="post" enctype="multipart/form-data" id="form_id">
            @csrf
            <input type="hidden" id="action" value="next" name="action">
            <h3>{{ $name }} Information</h3>
            @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">

                {!! \Session::get('success') !!}

            </div>
        @endif
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Upload Profile</label>
                        <input type="file" class="custom-file-input form-control" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" name="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" class="form-control" placeholder="Name" required
                        name="name">
                    </div>
                </div>




                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>City *</label>
                        <select class="form-select" required
                        name="birth_city">
                            <option selected="1">City</option>
                            <option value="2">Canada</option>
                            <option value="3">Germany</option>
                            <option value="4">Switzerland</option>
                            <option value="5">Australia</option>
                            <option value="6">United States</option>
                            <option value="7">New Zealand</option>
                            <option value="8">United Kingdom</option>
                            <option value="9">Netherlands</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>State *</label>
                        <select class="form-select" required
                        name="birth_state">
                            <option selected="1">State</option>
                            <option value="2">Canada</option>
                            <option value="3">Germany</option>
                            <option value="4">Switzerland</option>
                            <option value="5">Australia</option>
                            <option value="6">United States</option>
                            <option value="7">New Zealand</option>
                            <option value="8">United Kingdom</option>
                            <option value="9">Netherlands</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Country *</label>
                        <select class="form-select" name="birth_country" required>
                            <option selected="1">Country</option>
                            <option value="2">Canada</option>
                            <option value="2">India</option>
                            <option value="3">Germany</option>
                            <option value="4">Switzerland</option>
                            <option value="5">Australia</option>
                            <option value="6">United States</option>
                            <option value="7">New Zealand</option>
                            <option value="8">United Kingdom</option>
                            <option value="9">Netherlands</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                    <label for=""> Live Status</label>
                    {{--   <input type="text" placeholder="" class="shadow-none with-border" name="phone"> --}}


                    <div class="d-flex">
                        <div class="form-check me-5">
                            <input class="form-check-input" type="radio" value="1"
                                id="flexCheckDefault" checked name="live">
                            <label class="form-check-label" for="flexCheckDefault">
                                Alive
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0"
                                id="flexCheckChecked" name="live">
                            <label class="form-check-label" for="flexCheckChecked">
                                Pass Away
                            </label>
                        </div>
                    </div>

                </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                    <label for=""> Married Status</label>
                    {{--   <input type="text" placeholder="" class="shadow-none with-border" name="phone"> --}}


                    <div class="d-flex">
                        <div class="form-check me-5">
                            <input class="form-check-input" type="radio" value="1"
                                id="flexCheckDefault" checked name="married">
                            <label class="form-check-label" for="flexCheckDefault">
                                Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0"
                                id="flexCheckChecked" name="married">
                            <label class="form-check-label" for="flexCheckChecked">
                                Unmarried
                            </label>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" placeholder="Date of birth" id="datepicker" name="dob">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <a href="{{ $skipurl }}" class="btn-p px-4  btn btn-outline-danger"> Skip </a>
                            <a class="default-btn text-white" onclick="addmore()"> Add more </a>

                    <button type="submit" id="submit" class="default-btn">Save & Next</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <script>
        if (window.location.pathname == '/add-mother') {
            // document.getElementById('submit').innerHTML ='Finish';
        }


        function addmore() {
            $('#action').val('addmore')
            $('#submit').click();



        }
    </script>


@endsection
