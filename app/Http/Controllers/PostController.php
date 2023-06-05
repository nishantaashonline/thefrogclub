<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\PostComment;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function commentstore(Request $request)
    {
$post_id=$request->post_id;
$comment=$request->comment;
$user_id=Auth::user()->id;
$name=Auth::user()->name;
if(Auth::user()->profile_img==null){
    $profile=asset('assets/frontend/images/user.png');
}else{
    $profile=asset('assets/frontend/images/profile/'.Auth::user()->profile_img);
}
$data = PostComment::create(['user_id'=>$user_id,'post_id'=>$post_id,'comment'=>$comment,'status'=>1]);
dd($data);
echo '   <div class="comment-list">
<div class="comment-image">
    <a href="my-profile.html"><img src="'.$profile.'" class="rounded-circle" alt="image"></a>
</div>
<div class="comment-info">
    <h3>
        <a href="my-profile.html">'.$name.'</a>
    </h3>
    <span>5 Mins Ago</span>
    <p>'.$comment.'</p>

</div>
</div>';
    }
    public function store(Request $request)
    {


        $request->validate([
            'image' => 'file|max:10240',
            'video' => 'file|max:102400',

        ], [
            'image' => 'image size should be less than equal to 10 MB',
            'video' => 'Video size should be less than equal to 100 MB',

        ]);
      $data=$request->all();
      unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/post'), $imageName);
            $data['image'] = $imageName;

        }
        if ($request->hasFile('video')) {
            $imageName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/frontend/images/post'), $imageName);
            $data['video'] = $imageName;

        }
        $data['user_id']=Auth::user()->id;
        Post::create($data);
        return redirect()->back()->with('success', 'Post add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
