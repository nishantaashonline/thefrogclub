@extends('layouts.app')

@section('content')
    <div class="main_content">
        <div class="mcontainer">

            <!--  Feeds  -->
            <div class="">
                <div class="">
                    <div class="" uk-sticky="offset:80">

                        <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                            <ul uk-switcher="connect: #group-details; animation: uk-animation-fade">
                                <li class="uk-active">
                                    <a class="active" href="#0"> Family Members <span> {{$membercount}} </span> </a>
                                </li>
                                <li><a href="{{route('addmember')}}">Add New Member</a></li>
                            </ul>
                        </nav>
                        <div class="contact-list">
                            @foreach ($members as $member)
                                <a href="#">
                                    <div class="contact-avatar">
                                        @if ($member->image == null)
                                            <img src="{{ asset('assets/frontend/images/user.png') }}" alt="">
                                        @else
                                            <img src="{{ asset('assets/frontend/images/profile/' . $member->image) }}"
                                                alt="">
                                        @endif

                                        <span class="user_status"></span>
                                    </div>
                                    <div class="contact-username"> {{ $member->name }} , {{ $member->relation }}</div>
                                </a>
                            @endforeach





                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
