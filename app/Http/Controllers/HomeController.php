<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\FamilyMember;
use DB;
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
        $user = Auth::user();
        $suggetions = DB::table('suggetions')->where('user_id', $user->id)->get();
        return view('home', compact('suggetions'));
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
        return redirect()->route('addgrandfather');
        // return view('frontend.profile.add-grand-father');
    }


    public function addgrandfather()
    {
        $name='Grand Father';
        $formurl=route('storegrandfather');
        $skipurl=route('addgrandmother');
        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }
    public function storegrandfather(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Grand_Father';
        $data['gender'] = 'm';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        // return view('frontend.profile.basic-profile');
        if($request->action=='next'){
            return redirect()->route('addgrandmother');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addgrandmother()
    {
        $name='Grand Mother';
        $formurl=route('storegrandmother');
        $skipurl=route('addfather');
        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }
    public function storegrandmother(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Grand_Mother';
        $data['gender'] = 'f';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            return redirect()->route('addfather');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addfather()
    {
        $name='Father';
        $formurl=route('storefather');
        $skipurl=route('addmother');
        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }

    public function storefather(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Father';
        $data['gender'] = 'm';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            return redirect()->route('addmother');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addmother()
    {
        $name='Mother';
        $formurl=route('storemother');
        if(Auth::user()->married==1){
            $skipurl=route('addwife');
        }else{
            $skipurl=route('you.have.brother');
            // $skipurl=route('addbrother');
        }

        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }

    public function storemother(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Mother';
        $data['gender'] = 'f';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            if(Auth::user()->married==1){
                return redirect()->route('addwife');
            }else{
                return redirect()->route('you.have.brother');
            }

        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }
        // return redirect()->route('home');
    }
    public function addwife()
    {
        $name='Wife';
        $formurl=route('storewife');
        $skipurl=route('you.have.brother');
        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }

    public function storewife(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Wife';
        $data['gender'] = 'f';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            return redirect()->route('you.have.brother');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addbrother()
    {
        $name='Brother';
        $formurl=route('storebrother');
        $skipurl=route('you.have.sister');
        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }

    public function storebrother(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Brother';
        $data['gender'] = 'm';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            return redirect()->route('you.have.sister');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addchild()
    {
        $name='Childreen';
        $formurl=route('storechild');
        $skipurl=route('home');
        return view('frontend.profile.add-child',compact('name','formurl','skipurl'));
    }

    public function storechild(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Child';

        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
    public function addsister()
    {
        $name='Sister';
        $formurl=route('storesister');

        if(Auth::user()->married==1){
            $skipurl=route('you.have.child');
        }else{
            $skipurl=route('home');
        }

        return view('frontend.profile.add-grand-father',compact('name','formurl','skipurl'));
    }

    public function storesister(Request $request)
    {
        $id=Auth::user()->id;
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['form_submit']);
        unset($data['action']);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/frontend/images/profile'), $imageName);
            $data['image'] = $imageName;

        }
        $data['relation'] = 'Sister';
        $data['gender'] = 'f';
        $data['user_id'] = $id;
        FamilyMember::create($data);
        if($request->action=='next'){
            if(Auth::user()->married==1){
                return redirect()->route('you.have.clild');
            }else{
                return redirect()->route('home');
            }

        }else{
            return redirect()->back()->with('success', 'member add successful please Add more');
        }

    }
public function youhavebrother(){
    $yes=route('addbrother');
    $no=route('you.have.sister');
    $name="Brother";
    return view('frontend.profile.youhave',compact('no','yes','name'));
}
public function youhavesister(){
    $yes=route('addsister');
    if(Auth::user()->married==1){
        $no=route('you.have.child');
    }else{
        $no=route('home');
    }

    $name="Sister";
    return view('frontend.profile.youhave',compact('no','yes','name'));
}
public function youhavechild(){
    $yes=route('addchild');
    $no=route('home');
    $name="Childreen";
    return view('frontend.profile.youhave',compact('no','yes','name'));
}

}
