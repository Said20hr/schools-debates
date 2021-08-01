<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helper;

class UsersController extends Controller
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
     * Show the users list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $membership = 'users';
        $you = auth()->user();
        $users = User::where('status',false)->get();
        return view('dashboard.admin.usersList', compact('users', 'you','membership'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membership ='users';
        $user = User::find($id);
        return view('dashboard.admin.userShow', compact( 'user' ,'membership'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     *  Show the form for editing the user.
     *
     *  @param int $id
     *  @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $membership ='users';

        $user = User::find($id);

        return view('dashboard.admin.userEditForm', compact('user','membership'));
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
        if($request->status)
        {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'second_name' => ['max:255'],
            'birth_date' => ['date'],
            'job' => [ 'string', 'max:255'],
            'work_place' => ['string', 'max:255'],
            'school' => ['string', 'max:255'],
            'level' => ['string', 'max:255'],
            'phone' => ['numeric'],
            'id_carte' => ['image','mimes:jpeg,png,jpg,gif,svg|max:512'],
            'avatar' => ['image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $user = User::find($id);
        if ($user->role == 'student')
        {
            $user->name       = $request->input('name');
            $user->lastname       = $request->input('lastname');
            $user->second_name       = $request->input('second_name');
            $user->birth_date       = $request->input('birth_date');
            $user->school       = $request->input('school');
            $user->phone       = $request->input('phone');
            $user->level       = $request->input('level');
            if ($request->avatar)
            {
                $user->avatar = $this->uploadImagesArray($request->avatar,'users/student/avatars/');
            }
            $user->status  = true;
        }
        if ($user->role == 'coach')
        {
            $user->name       = $request->input('name');
            $user->lastname       = $request->input('lastname');
            $user->second_name       = $request->input('second_name');
            $user->birth_date       = $request->input('birth_date');
            $user->job       = $request->input('job');
            $user->phone       = $request->input('phone');
            $user->work_place       = $request->input('work_place');
            if ($request->avatar)
            {
                $user->avatar = $this->uploadImagesArray($request->avatar,'users/coach/avatars/');
            }
            $user->status      = true;

        }

        $user->save();
        $request->session()->flash('success_message', 'لقد تم تفعيل و تغيير  بيانات العضو بنجاح');
        }
        else
        {
            $request->session()->flash('error_message', 'لم يتم تفعيل  العضو ');
            return redirect()->back();
        }
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
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('users.index')->with('error_message','تم حذف المسجل بنجاح');
    }
    private function uploadImagesArray( $image, string $directory)
    {
        $extension = $image->getClientOriginalName();
        $name = time() . '.' . $extension;
        $image->move('storage/'.$directory.'/', $name);
        return  $name;
    }



}
