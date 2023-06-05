<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Auth::user();

 return view('frontend.profile.myprofile',compact('data'));
    }
    public function editabout()
    {


 return view('frontend.profile.editabout');
    }
    public function updateabout(Request $request)
    {

User::where('id',Auth::user()->id)->update(['about'=>$request->about]);
        return redirect()->route('profile.index')->with('success', 'Post add successfully');
    }
    public function updatecoverphoto(Request $request)
    {
        if ($request->hasFile('coverphoto')) {
            $imageName = time() . '.' . $request->coverphoto->extension();
            $request->coverphoto->move(public_path('assets/frontend/images/profile'), $imageName);

            User::where('id',Auth::user()->id)->update(['coverphoto'=>$imageName]);
        }


        return redirect()->back()->with('success', 'Post add successfully');
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
    public function store(Request $request)
    {
        //
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
      $data=Auth::user();
      return view('frontend.profile.editprofile',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        unset($data['_token']);
        unset($data['_method']);
        if ($request->hasFile('profile_img')) {
            $imageName = time() . '.' . $request->profile_img->extension();
            $request->profile_img->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['profile_img'] = $imageName;

        }
        User::whereId($id)->update($data);
     return redirect()->route('profile.index')->with('message','Profile Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
