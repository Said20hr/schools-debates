<?php

namespace App\Http\Controllers;

use App\Models\EventsUsers;
use App\Models\Notes;
use App\Models\Tournement;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =Auth::user();

        return view('profile.students.index',compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function events()
    {

        $user =Auth::user();
        if ($user->role == 'student') {
            $events =EventsUsers::where('user_id',$user->id)->get();
            $tournaments =Tournement::where('user_id',$user->id)->get();
            return view('profile.students.events',compact('user','events','tournaments'));
        }
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function notes()
    {
        $user =Auth::user();
        if ($user->role == 'student') {
            return view('profile.students.notes', compact('user'));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function usersnotes()
    {
        $user =Auth::user();
        $notes = Notes::all();
        if ($user->role == 'coach')
        {
            return view('profile.coaches.notes',compact('user','notes'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $user=User::find($id);
      if (!$user || $user->id ==1)
      {
          return abort(404);
      }
      else
      {
          $tournaments =Tournement::where('user_id',$user->id)->get();
          $tournaments_1 = $tournaments->where('type','البطولات الرسمية الدولية');
          $tournaments_2 = $tournaments->where('type','البطولات الرسمية المحليه');
          $tournaments_3 = $tournaments->where('type','البطولات التفاعليه');
          $tournaments_4 = $tournaments->where('type','البطولات المفتوحه');
          $tournaments_5 = $tournaments->where('type','الانشطه و الفعاليات في مجال المناظرات');
          if ($user->role=="student")
          {
              $role="متناظر";
              return view('users.show',compact('user','role',
                  'tournaments_1','tournaments_2','tournaments_3','tournaments_4','tournaments_5'));
          }
          if ($user->role=="coach")
          {
              $role="مدرب";
              return view('users.show',compact('user','role'));
          }
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Store the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'type' => ['required','string'],
            'title' => ['required','string'],
            'content' => ['required','string'],
        ]);
       $note = Notes::create([
           'type' => $request->input('type'),
           'title' =>  $request->input('title'),
           'content' =>  $request->input('content'),
           'status' =>  'في الانتظار',
           'user_id' =>  Auth::user()->id
       ]);
        $request->session()->flash('success_message', 'لقد تم ارسال الملاحظة بنجاح');
        return redirect()->back();

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

        if (auth()->user()->id == $id) {
            if ($request->region)
            {
                $validatedData = $request->validate([
                    'region' => ['required', 'string'],
                    'province' => ['required', 'string'],
                    'rue' => ['required', 'string'],
                    'commune' => ['string'],
                    'house' => ['required', 'string'],
                    'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg|max:512'],
                ]);
                $user = auth()->user();
                $user->region = $request->input('region');
                $user->province = $request->input('province');
                $user->rue = $request->input('rue');
                $user->commune = $request->input('commune');
                $user->house = $request->input('house');
                if ($request->avatar) {
                    $user->avatar = $this->uploadImagesArray($request->avatar, 'users/' . $user->role . '/avatars/');
                }
                $user->save();
                $request->session()->flash('success_message', 'لقد تم حفظ بياناتك السكنية بنجاح');
                return redirect()->back();
            }
            else
            {
                $validatedData = $request->validate([
                    'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg|max:512'],
                ]);
                $user = auth()->user();
                if ($request->avatar) {
                    $user->avatar = $this->uploadImagesArray($request->avatar, 'users/' . $user->role . '/avatars/');
                }
                $user->save();
                $request->session()->flash('success_message', 'لقد تم تغيير صورتك الشخصية بنجاح');
                return redirect()->back();
            }

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function uploadImagesArray( $image, string $directory)
    {

        if ($image)
        {
            $extension = $image->getClientOriginalName();
            $name = time() . '.' . $extension;
            $image->move('storage/' . $directory . '/', $name);
            return $name;
        }
        else
        {
            return '';
        }

    }
}
