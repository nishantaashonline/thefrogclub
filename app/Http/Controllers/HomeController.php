<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\FamilyMember;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function basicprofile()
    {
        return view('frontend.profile.basic-profile');
    }
    public function basic_profile_update(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        if ($request->hasFile('profile_img')) {
            $imageName = time() . '.' . $request->profile_img->extension();
            $request->profile_img->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['profile_img'] = $imageName;

        }
        User::whereId($id)->update($data);
        return view('frontend.profile.add-grand-father');
    }


    public function addgrandfather()
    {
        $name='Grand Father';
        $formurl=route('storegrandfather');
        return view('frontend.profile.add-grand-father',compact('name','formurl'));
    }
    public function storegrandfather(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'grandfather';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        // return view('frontend.profile.basic-profile');
        return redirect()->route('addfather');
    }
    public function addfather()
    {
        $name='Father';
        $formurl=route('storefather');
        return view('frontend.profile.add-grand-father',compact('name','formurl'));
    }

    public function storefather(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'father';
        $data['user_id'] = $id;
        FamilyMember::create($data);

        return redirect()->route('addmother');
    }
    public function addmother()
    {
        $name='Mother';
        $formurl=route('storemother');
        return view('frontend.profile.add-grand-father',compact('name','formurl'));
    }

    public function storemother(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'mother';
        $data['user_id'] = $id;
        FamilyMember::create($data);

        return redirect()->route('home');
    }
}
