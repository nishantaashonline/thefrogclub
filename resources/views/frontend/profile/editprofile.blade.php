@extends('layouts.app')

@section('content')


<form class="account-setting-form" action="{{route('profile.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <h3>Edit Personal Information</h3>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>Upload Profile</label>
                <input type="file" class="custom-file-input form-control" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01" name="profile_img">
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$data->name}}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" class="form-control" placeholder="Date of birth" id="datepicker" name="dob" value="{{$data->dob}}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Phone No:</label>
                <input type="number" class="form-control" placeholder="Phone no" name="phone" value="{{$data->phone}}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Gender</label>
                <select class="form-select" name="gender" >

                    <option value="m" @if($data->gender=="m") selected @endif>Male</option>
                    <option value="f" @if($data->gender=="f") selected @endif>Female</option>
                    <option value="o" @if($data->gender=="o") selected @endif>Other</option>
                  </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Relation Status</label>
                <select class="form-select" name="married" >
                    <option selected="2">Relation Status</option>
                    <option value="1" @if($data->married=="1") selected @endif>Married</option>
                    <option value="0" @if($data->married=="0") selected @endif>Unmarried</option>

                  </select>
            </div>
        </div>




        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>City</label>
                <select class="form-select">
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
                <label>State</label>
                <select class="form-select">
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
                <label>Country</label>
                <select class="form-select">
                    <option selected="1">Country</option>
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
        <div class="col-lg-12 col-md-12">
            <button type="submit" class="default-btn">Save</button>
        </div>
    </div>
</form>






@endsection

