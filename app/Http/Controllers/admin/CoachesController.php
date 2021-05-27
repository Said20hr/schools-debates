<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CoachesController extends Controller
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
        // users students coaches
        $membership ='coaches';
        $you = auth()->user();
        $users = User::where('role','=','coach')->where('status',true)->get();
        return view('dashboard.admin.usersList', compact('users','you','membership'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membership ='coaches';
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
        $membership ='coaches';
        return view('dashboard.admin.UserCreateForm', compact( 'membership'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'second_name' => ['max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'work_place' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_carte' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);

        $user =  User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'second_name' => $request->second_name,
            'job' => $request->job,
            'work_place' => $request->work_place,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'coach',
            'status' => true,
            'id_carte' => $this->uploadImagesArray($request->id_carte, 'users/coach/id_carte/')
        ]);
        $user->assignRole('coach');

        return redirect()->route('coaches.index')->with('success_message','تمت اضافة المدرب بنجاح');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit( $id)
    {
        $membership ='coaches';
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
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'second_name' => ['max:255'],
            'birth_date' => ['date'],
            'job' => ['string', 'max:255'],
            'work_place' => ['string', 'max:255'],
            'phone' => ['numeric'],
            'avatar' => ['image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);


        $user = User::find($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->second_name = $request->input('second_name');
        $user->birth_date = $request->input('birth_date');
        $user->work_place = $request->input('work_place');
        $user->job = $request->input('job');
        if ($request->avatar)
        {
            $user->avatar = $this->uploadImagesArray($request->avatar,'users/coach/avatars/');
        }
        $user->save();
        $request->session()->flash('success_message', 'لقد تم تغيير بيانات المدرب بنجاح');
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
        return redirect()->route('coaches.index')->with('error_message','تم حذف المدرب بنجاح');
    }
    private function uploadImagesArray( $image, string $directory)
    {
        $extension = $image->getClientOriginalName();
        $name = time() . '.' . $extension;
        $image->move('storage/'.$directory.'/', $name);
        return  $name;
    }
}
