@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
<div class="alert alert-success" role="alert">

    {!! \Session::get('success') !!}

</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your Post.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="content-page-box-area">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <aside class="widget-area">
                <div class="widget widget-view-profile">
                    <div class="profile-box d-flex justify-content-between align-items-center">
                        <a href="my-profile.html"><img src="assets/images/user/user-1.jpg" alt="image"></a>
                        <div class="text ms-2">
                            <h3><a href="my-profile.html">Matthew Turner</a></h3>
                            <span>Washington</span>
                        </div>
                    </div>
                    <ul class="profile-statistics">
                        <li>
                            <a href="#">
                                <span class="item-number">59862</span>
                                <span class="item-text">Likes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item-number">8591</span>
                                <span class="item-text">Following</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item-number">784514</span>
                                <span class="item-text">Followers</span>
                            </a>
                        </li>
                    </ul>
                    <div class="profile-likes">
                        <span><i class="flaticon-heart-shape-outline"></i> New Likes This Week</span>

                        <ul>
                            <li>
                                <a href="#"><img src="assets/images/user/user-22.jpg" alt="image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/user/user-23.jpg" alt="image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/user/user-24.jpg" alt="image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/user/user-25.jpg" alt="image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/user/user-26.jpg" alt="image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/user/user-27.jpg" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-btn">
                        <a href="my-profile.html" class="default-btn">View Profile</a>
                    </div>
                </div>
                <div class="widget widget-page-you-like">
                    <h3 class="widget-title">Page You Like</h3>

                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg1" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Graphic Design</a>
                            </h4>
                            <span>1215 Members</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg2" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Digital Marketing</a>
                            </h4>
                            <span>1865 Members</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg3" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Fitness Club</a>
                            </h4>
                            <span>2051 Members</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg4" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Dream Restaurant</a>
                            </h4>
                            <span>5214 Members</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg5" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Travel Life</a>
                            </h4>
                            <span>9589 Members</span>
                        </div>
                    </article>
                </div>
                <div class="widget widget-watch-video">
                    <h3 class="widget-title">Watch Video</h3>

                    <div class="watch-video-slides owl-carousel owl-theme">
                        <div class="video-item">
                            <img src="assets/images/watch-video/video-1.jpg" alt="image">

                            <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                <i class="ri-play-fill"></i>
                            </a>
                        </div>
                        <div class="video-item">
                            <img src="assets/images/watch-video/video-2.jpg" alt="image">

                            <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                <i class="ri-play-fill"></i>
                            </a>
                        </div>
                        <div class="video-item">
                            <img src="assets/images/watch-video/video-3.jpg" alt="image">

                            <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                <i class="ri-play-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget widget-advertisement">
                    <h3 class="widget-title">Advertisement</h3>

                    <div class="advertisement-image">
                        <a href="#"><img src="assets/images/advertisement.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="widget widget-suggested-groups">
                    <h3 class="widget-title">Suggested Groups</h3>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg1" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">UX/UI Design Group</a>
                            </h4>
                            <span>5000+ Members</span>
                            <a href="#" class="join-btn">Join Community</a>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg2" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Job Search Group</a>
                            </h4>
                            <span>5000+ Members</span>
                            <a href="#" class="join-btn">Join Community</a>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg3" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Photography Group</a>
                            </h4>
                            <span>5000+ Members</span>
                            <a href="#" class="join-btn">Join Community</a>
                        </div>
                    </article>
                </div>
            </aside>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="news-feed-area">

                <div class="news-feed news-feed-form">
                    <h3 class="news-feed-title">Create New Post</h3>

                    <form action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="post" class="form-control" placeholder="Write something here..." required></textarea>
                            <img id="output" class="mt-2"/>
                            <video id="video-output" class="mt-2 w-100" controls style="display: none"></video>
                        </div>
                        <ul class="button-group d-flex justify-content-between align-items-center">
                            <li class="photo-btn">
                                <label for="photoselect" class="cursor-pointer"><i class="flaticon-gallery i-photo"></i> Photo</label>
                                <input type="file" name="image" id="photoselect" class="d-none" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)">
                            </li>
                            <li class="video-btn">
                                <label for="videoselect" class="cursor-pointer"><i class="flaticon-video i-video"></i> Video</label>
                                <input type="file" name="video" id="videoselect" class="d-none" accept="video/mp4,video/mkv, video/x-m4v,video/*">
                            </li>
                            {{-- <li class="tag-btn">
                                <button type="submit"><i class="flaticon-tag"></i> Tag Friends</button>
                            </li> --}}
                            <li class="post-btn">
                                <button type="submit">Post</button>
                            </li>
                        </ul>
                    </form>
                </div>

                <div class="news-feed news-feed-stories">
                    <div class="stories-title d-flex justify-content-between align-items-center">
                        <h3>Stories</h3>
                        <span><a href="#">See All</a></span>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <div class="stories-image">
                                    <a href="#">
                                        <img src="assets/images/user/user-1.jpg" alt="image">
                                    </a>
                                    <div class="add-icon">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <span><a href="#">Add Story</a></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <a href="#">
                                    <img src="assets/images/user/user-28.jpg" alt="image">
                                </a>
                                <span><a href="#">Jimenez</a></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <a href="#">
                                    <img src="assets/images/user/user-29.jpg" alt="image">
                                </a>
                                <span><a href="#">Lolita</a></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <a href="#">
                                    <img src="assets/images/user/user-13.jpg" alt="image">
                                </a>
                                <span><a href="#">Matthew</a></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <a href="#">
                                    <img src="assets/images/user/user-30.jpg" alt="image">
                                </a>
                                <span><a href="#">Russell</a></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="stories-item">
                                <a href="#">
                                    <img src="assets/images/user/user-31.jpg" alt="image">
                                </a>
                                <span><a href="#">Katzman</a></span>
                            </div>
                        </div>
                    </div>
                </div>
@foreach ($posts as $post)
@php

$ctime = Carbon\Carbon::now();

$diff_in_min_p = $ctime->diffInDays($post->created_at);
@endphp

                <div class="news-feed news-feed-post">
                    <div class="post-header d-flex justify-content-between align-items-center">
                        <div class="image">
                            <a href="my-profile.html">
                                @if ($post->profile_img==null)
                                <img src="{{asset('assets/images/frontend/images/user.png')}}" class="rounded-circle" alt="image">
                               @else
                               <img src="{{asset('assets/frontend/images/profile'.$post->profile_img)}}" class="rounded-circle" alt="image">
                                @endif

                            </a>
                        </div>
                        <div class="info ms-3">
                            <span class="name"><a href="my-profile.html">{{$post->name}}</a></span>
                            <span class="small-text">{{$diff_in_min_p}} Days Ago</span>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-body">
                        <p>{{$post->post}}</p>
                        @if ($post->image!=null)
                        <div class="post-image">
                            <img src="{{asset('assets/frontend/images/post/'.$post->image)}}" alt="image">
                        </div>
                        @endif
                        @if ($post->video!=null)
                        <div class="post-image">
                            <video class="w-100" controls>
                                <source src="{{asset('assets/frontend/images/post/'.$post->video)}}" type="video/mp4">

                              </video>

                        </div>
                        @endif
@php
    $totallike=DB::table('post_likes')->where('post_id',$post->id)->where('status',1)->count();
    $totalcomment=DB::table('post_comments')->where('post_id',$post->id)->where('status',1)->count();
    $previous=DB::table('post_likes')->where('user_id',auth()->user()->id)->where('post_id',$post->id)->first();
@endphp
                        <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                            <li class="post-react">
                                <a onclick="linkevent({{$post->id}})" class="cursor-pointer">
                                    @if($previous!=null)
                                        @if($previous->status==0)
                                        <i class="flaticon-like fa-solid" id="likeicon{{$post->id}}"></i>
                                        @endif
                                        @if($previous->status==1)
                                        <i class="fa-thumbs-up fa-solid" id="likeicon{{$post->id}}"></i>
                                        @endif

                                        @else
                                        <i class="flaticon-like fa-solid" id="likeicon{{$post->id}}"></i>
                                    @endif


                                    <span>Like</span> <span class="number" id="totallike{{$post->id}}">{{$totallike}} </span>
                                </a>

                                {{-- <ul class="react-list">
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="post-comment">
                                <a ><i class="flaticon-comment"></i><span>Comment</span> <span class="number">{{$totalcomment}} </span></a>
                            </li>
                            {{-- <li class="post-share">
                                <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a>
                            </li> --}}
                        </ul>
                        <div class="post-comment-list max-h-300" id="incomingcomment{{$post->id}}">
                            @php

                               $comments= DB::table('post_comments')->where('post_id',$post->id)->get();

                            @endphp
                            @foreach ($comments as $comment )
                            @php

                             $mytime = Carbon\Carbon::now();

                             $diff_in_min = $mytime->diffInMinutes($comment->created_at);
                         @endphp

                            <div class="comment-list" >
                                <div class="comment-image">
                                    <a href="my-profile.html">
                                        @if ($post->profile_img==null)
                                        <img src="{{asset('assets/frontend/images/user.png')}}" class="rounded-circle" alt="image">
                                        @else
                                        <img src="{{asset('assets/frontend/images/profile/'.$post->profile_img)}}" class="rounded-circle" alt="image">
                                        @endif

                                    </a>
                                </div>
                                <div class="comment-info">
                                    <h3>
                                        <a href="my-profile.html">{{$post->name}}</a>
                                    </h3>
                                    <span>{{$diff_in_min}} Mins Ago</span>
                                    <p>{{$comment->comment}}</p>
                                    {{-- <ul class="comment-react">
                                        <li><a href="#" class="like">Like(2)</a></li>
                                        <li><a href="#">Reply</a></li>
                                    </ul> --}}
                                </div>
                            </div>
                            @endforeach



                            {{-- <div class="more-comments">
                                <a href="#">More Comments+</a>
                            </div> --}}
                        </div>
                        <div class="post-footer">

                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="footer-image">
                                <a href="#">
                                    @if (auth()->user()->profile_img==null)
                                    <img src="{{asset('assets/frontend/images/user.png')}}" class="rounded-circle" alt="image">
                                      @else
                                      <img src="{{asset('assets/frontend/images/profile/'.auth()->user()->profile_img)}}" class="rounded-circle" alt="image">
                                    @endif

                                </a>
                            </div>
                            <div class="form-group">
                                <textarea name="comment" id="comment{{$post->id}}" class="form-control" placeholder="Write a comment..." ></textarea>
                                <label><a type="button" onclick="commnetform({{$post->id}})"><i class="flaticon-comment-1"></i></a></label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="load-more-posts-btn">
                    <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12">
            <aside class="widget-area">
                <div class="widget widget-weather">
                    <div class="weather-image">
                        <a href="#"><img src="assets/images/weather/weather.jpg" alt="image"></a>
                    </div>
                </div>
                <div class="widget widget-birthday">
                    <div class="birthday-title d-flex justify-content-between align-items-center">
                        <h3>Today Birthdays</h3>
                        <span><a href="#">See All</a></span>
                    </div>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg1" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Earline Benally</a>
                            </h4>
                            <span>Today</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg2" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Jack Gulley</a>
                            </h4>
                            <span>Today</span>
                        </div>
                    </article>

                    <div class="birthday-title d-flex justify-content-between align-items-center">
                        <h3>Recent Birthdays</h3>
                        <span><a href="#">See All</a></span>
                    </div>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg3" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Lolita Benally</a>
                            </h4>
                            <span>May 18</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg4" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Russell Gulley</a>
                            </h4>
                            <span>May 20</span>
                        </div>
                    </article>

                    <div class="birthday-title d-flex justify-content-between align-items-center">
                        <h3>Coming Birthdays</h3>
                        <span><a href="#">See All</a></span>
                    </div>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg5" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Cindy L. Wilson</a>
                            </h4>
                            <span>July 18</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg6" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">Patricia E. Looney</a>
                            </h4>
                            <span>July 20</span>
                        </div>
                    </article>
                    <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage bg7" role="img"></span>
                        </a>

                        <div class="info">
                            <h4 class="title">
                                <a href="#">James G. Nelson</a>
                            </h4>
                            <span>July 21</span>
                        </div>
                    </article>
                </div>
                <div class="widget widget-explore-events">
                    <h3 class="widget-title">Explore Events</h3>

                    <article class="item">
                        <a href="#"><img src="assets/images/explore-events/explore-1.jpg" alt="image"></a>
                    </article>
                    <article class="item">
                        <a href="#"><img src="assets/images/explore-events/explore-2.jpg" alt="image"></a>
                    </article>
                </div>
                <div class="widget widget-who-following">
                    <h3 class="widget-title">Who's Following</h3>

                    <div class="following-item d-flex justify-content-between align-items-center">
                        <a href="#"><img src="assets/images/user/user-42.jpg" class="rounded-circle" alt="image"></a>
                        <span class="name"><a href="#">Shawn Lynch</a></span>
                        <span class="add-friend"><a href="#">Add</a></span>
                    </div>
                    <div class="following-item d-flex justify-content-between align-items-center">
                        <a href="#"><img src="assets/images/user/user-43.jpg" class="rounded-circle" alt="image"></a>
                        <span class="name"><a href="#">Kenneth Perry</a></span>
                        <span class="add-friend"><a href="#">Add</a></span>
                    </div>
                    <div class="following-item d-flex justify-content-between align-items-center">
                        <a href="#"><img src="assets/images/user/user-44.jpg" class="rounded-circle" alt="image"></a>
                        <span class="name"><a href="#">Janet Suarez</a></span>
                        <span class="add-friend"><a href="#">Add</a></span>
                    </div>
                    <div class="following-item d-flex justify-content-between align-items-center">
                        <a href="#"><img src="assets/images/user/user-45.jpg" class="rounded-circle" alt="image"></a>
                        <span class="name"><a href="#">Brian Mingo</a></span>
                        <span class="add-friend"><a href="#">Add</a></span>
                    </div>
                    <div class="following-item d-flex justify-content-between align-items-center">
                        <a href="#"><img src="assets/images/user/user-46.jpg" class="rounded-circle" alt="image"></a>
                        <span class="name"><a href="#">Julia Ramos</a></span>
                        <span class="add-friend"><a href="#">Add</a></span>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<div class="right-sidebar-area" data-simplebar>
    <div class="recent-chat-box">
        <div class="title">
            <h3>Recent Chat</h3>
        </div>

        <div class="chat-body" data-simplebar>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-15.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Stephan Redding</a></span>
                <span class="status-online"></span>
            </div>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-16.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Maria Smith</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-17.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Paul Enlow</a></span>
                <span class="status-online"></span>
            </div>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-8.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Stephan Redding</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-9.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Mariaons Smith</a></span>
                <span class="status-online"></span>
            </div>
            <div class="chat-item">
                <a href="#"><img src="assets/images/user/user-10.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Paul Enlow</a></span>
                <span class="status-offline"></span>
            </div>
        </div>
    </div>

    <div class="recent-contact-box">
        <div class="title">
            <h3>Contact</h3>
        </div>
        <div class="contact-search-box">
            <form>
                <input type="text" class="input-search" placeholder="Search">
                <button type="submit"><i class="ri-search-line"></i></button>
            </form>
        </div>
        <div class="contact-body" data-simplebar>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-18.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Karen Williams</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Mary A. Schwarz</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-20.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Rex Carruth</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">James Vanwinkle</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-19.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Oscar Thompson</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Harry Lopez</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-21.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Frank S. Arena</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-16.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Karen Williams</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Mary A. Schwarz</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Rex Carruth</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-18.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">James Vanwinkle</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Oscar Thompson</a></span>
                <span class="status-offline"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-6.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Harry Lopez</a></span>
                <span class="status-online"></span>
            </div>
            <div class="contact-item">
                <a href="#"><img src="assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                <span class="name"><a href="#">Frank S. Arena</a></span>
                <span class="status-offline"></span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


    const inputFile = document.getElementById("videoselect");
const video = document.getElementById("video-output");

inputFile.addEventListener("change", function(){
    const file = inputFile.files[0];
    const videourl = URL.createObjectURL(file);
    video.style.display = "initial";
    video.setAttribute("src", videourl);
    // video.play();
})



function commnetform(id){

comment=$('#comment'+id).val();
post_id=id;
if(comment!=""){
    $.ajax({
    type: "GET",
    url: "{{route('post.comment.store')}}",
    data: {comment,post_id},

    success: function(result){
        $('#incomingcomment'+post_id).append(result);
        $('#comment'+id).val('')
    }
});
}
}
function linkevent(id){


post_id=id;

    $.ajax({
    type: "GET",
    url: "{{route('post.like.store')}}",
    data: {post_id},

    success: function(result){
        // $('#incomingcomment').append(result);
        if(result.status==1){
         $('#likeicon'+post_id).addClass('fa-thumbs-up').removeClass('flaticon-like');
        }
        if(result.status==0){
         $('#likeicon'+post_id).addClass('flaticon-like').removeClass('fa-thumbs-up');
        }
        $('#totallike'+post_id).html(result.total);

        console.log(result.status);

    }
});

}
    </script>
    @endsection
