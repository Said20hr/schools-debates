<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventsUsers;
use App\Models\User;
use Illuminate\Http\Request;

class EventUsersController extends Controller
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
        $eventsUser= EventsUsers::all();
       return view('dashboard.events.list',compact('eventsUser'));
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

       $event = Event::findOrFail($request->event);
       foreach ($request->participants as $par)
       {
           $exist = EventsUsers::where('user_id',$par)
               ->where('event_id',$event->id)->exists();
           if (!$exist)
           {
               EventsUsers::create([
                   'user_id' =>$par,
                   'event_id' =>$event->id,
               ]);
           }

       }
       return redirect()->back()->with('success_mesage','لقد تم تسجيل المتفاعلين التفاعلية بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function register ($id)
    {
        $users = User::where('role','=','student')->where('status',true)->get();
        $event=Event::findOrfail($id);

        return view('dashboard.events.register',compact('event','users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EventsUsers = EventsUsers::find($id);
        if($EventsUsers){
            $EventsUsers->delete();
        }
        return redirect()->route('eventsUsers.index')->with('error_message','تم حذف التسجيل بنجاح');
    }
}
