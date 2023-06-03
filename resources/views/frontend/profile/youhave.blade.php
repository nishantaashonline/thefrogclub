@extends('layouts.profile')

@section('content')
<div class="">
    <div class="mcontainer">





        <div class="grid lg:grid-cols-2 mt-12 gap-8">

            <div class="card rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">

                <div class="grid text-center gap-3 lg:p-6 p-4">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold"> You Have {{$name}}</h2>

                    </div>
                    <div class="bg-gray-10 pt-3 pt-0 d-flex justify-content-center">
                        {{-- <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button> --}}
                        <a href="{{$no}}" class=" px-4 mx-3 btn btn-outline-danger"> No </a>
                        <a  href="{{$yes}}" id="submit" class="px-4 mx-3 btn btn-outline-primary"> Yes </a>
                    </div>
                </div>



             </div>



        </div>

    </div>
</div>

@endsection
