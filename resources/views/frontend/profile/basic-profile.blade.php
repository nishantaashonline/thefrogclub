@extends('layouts.profile')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="account-setting-form">
                <h3 class=""> Basic Detail</h3>
                <p> You have to fill for complete your profile</p>

            </div>
        </div>
        <div class="col-md-8">
            <form class="account-setting-form" action="{{ route('basic_profile_update') }}" method="post"
                enctype="multipart/form-data" id="form_id">
                @csrf

                <h3>Basic Information</h3>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Upload Profile</label>
                            <input type="file" class="custom-file-input form-control" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" name="profile_img">
                        </div>
                    </div>





                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>City *</label>
                            <select class="form-select" required name="birth_city">
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
                            <select class="form-select" required name="birth_state">
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
                            <label>Gender *</label>
                            <select class="form-select" name="gender" required>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Other</option>
                            </select>


                        </div>
                    </div>


                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for=""> Married Status</label>
                        {{--   <input type="text" placeholder="" class="shadow-none with-border" name="phone"> --}}


                        <div class="d-flex">
                            <div class="form-check me-5">
                                <input class="form-check-input" type="radio" value="1" id="flexCheckDefault" checked
                                    name="married">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Married
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" id="flexCheckChecked"
                                    name="married">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Unmarried
                                </label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" class="form-control" placeholder="Mobile No." name="phone">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" placeholder="Date of birth" id="datepicker"
                            name="dob">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">


                    <button type="submit" class="default-btn">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>


















    <!-- For Night mode -->


    <!-- Javascript
            ================================================== -->
@endsection
