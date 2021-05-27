<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventsUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::where('case',true)->paginate(6);
      $last_events = Event::where('case',false)->paginate(6);

      return view('pages.events',compact('events','last_events'));
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

        $event=Event::find($request->event);
        $user=Auth::user();
        $eventsUser_exist = EventsUsers::where('user_id',$user->id)
            ->where('event_id',$event->id)->exists();

        if (!$eventsUser_exist)
        {
            EventsUsers::create([
                'user_id' =>$user->id,
                'event_id' =>$event->id,
            ]);
            $request->session()->flash('success_message', 'شكرا لك، لقد تم تسجليك في التفاعلية بنجاح.');
            return view('pages.eventRegistred');
        }
        else
        {
            $request->session()->flash('error_message', 'انت مسجل في التفاعلية من قبل لا يمكنك اعادة التسجيل');
            return redirect()->back();
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
        $event=Event::find($id);
        $otherEvents=Event::where('id','!=',$id)->take(3)->get();
        $count_participants= EventsUsers::where('event_id',$id)->count();
        $users_reg=EventsUsers::where('event_id',$id)->orderBy('created_at', 'desc')->take(5)->get();

        //$users_reg=$event->users->take(5);

      if (Auth::user())
      {
          $user=Auth::user();
          $eventsUser_exist = EventsUsers::where('user_id',$user->id)
              ->where('event_id',$event->id)->exists();
          return  view('pages.EventSingle',compact('event','otherEvents','eventsUser_exist','count_participants','users_reg'));
      }
      else
      {
          return  view('pages.EventSingle',compact('event','otherEvents','count_participants','users_reg'));
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
}
