<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class membersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $members=Member::all();
       return view('dashboard.members.list',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //check user create studen and coach
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'avatar' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);

        $user = Member::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'job' => $request->job,
            'avatar' => $this->uploadImagesArray($request->avatar, 'members/')
        ]);
        return redirect()->route('members.index')->with('success_message', 'تمت اضافة العضو بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=Member::find($id);
        return view('dashboard.members.read',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        return view('dashboard.members.Edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $member = Member::find($id);
        $member->name       = $request->input('name');
        $member->lastname       = $request->input('lastname');
        $member->job       = $request->input('job');
        if ($request->avatar)
        {
            $member->avatar =   $this->uploadImagesArray($request->avatar, 'members/');
        }
        $member->save();

         $request->session()->flash('success_message', 'لقد تم تفعيل و تغيير  بيانات العضو بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        if($member){
            $member->delete();
        }
        return redirect()->route('members.index')->with('error_message','تم حذف العضو بنجاح');
    }
    /*
     *
     */
    private function uploadImagesArray( $image, string $directory)
    {
        if ($image)
        {
            $extension = $image->getClientOriginalName();
            $name = time() . '.' . $extension;
            $image->move('storage/'.$directory.'/', $name);
            return  $name;
        }

    }
}
