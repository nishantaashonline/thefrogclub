@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="account-setting-form">
            <h3 class="text-xl mb-2 font-semibold"> Add Family Member</h3>


        </div>
    </div>
    <div class="col-md-8">
        <form class="account-setting-form" action="{{route('member.store')}}" method="post" enctype="multipart/form-data" id="form_id">
            @csrf

            <h3>Person Information</h3>
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
                <div class="col-lg-12 col-md-12">
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
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Relation (who is Your) *</label>
                        <select class="form-select" required
                        name="relation">

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
                        <label>Gender *</label>
                        <select class="form-select" name="gender" required>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="o">Other</option>
                        </select>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" placeholder="Date of birth" id="datepicker" name="dob">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">

                    <button type="submit" id="submit" class="default-btn">Save & Next</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <script>


        function addmore() {
            $('#action').val('addmore')
            $('#submit').click();



        }
    </script>

@endsection

