<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyMember;
use Auth;
class FamilyController extends Controller
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

    public function familylist()
    {
        $members=FamilyMember::where('user_id',Auth::user()->id)->get();
        $membercount=$members->count();
      return view('frontend.family.familymember',compact('members','membercount'));
    }
    public function addmember()
    {

      return view('frontend.family.add-member');
    }
    public function memberstore(Request $request)
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

        $data['user_id'] = $id;
        FamilyMember::create($data);

        return redirect()->back()->with('success', 'member add successful');
    }
}
