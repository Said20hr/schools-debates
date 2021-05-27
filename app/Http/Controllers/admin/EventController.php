<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EventController extends Controller
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
        $events = Event::paginate( 20 );
        return view('dashboard.events.browse', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'participants' => ['required', 'string'],
            'description' => ['required', 'string'],
            'case' => ['required', 'bool'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        if ($request->case =='on')
        {
            $case=true;
        }
        else
        {
            $case=false;
        }
        $events =  Event::create([
            'name' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'participants' => $request->participants,
            'place' => 'مكان',
            'images' => ' ',
            'case' => $case,
            'image' => $this->uploadImagesArray($request->image,'events/')
        ]);


        return redirect()->route('events.index')->with('success_message','تمت اضافة التفاعلية بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('dashboard.events.read', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('dashboard.events.edit', compact('event'));
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

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => ['string', 'max:255'],
            'date' => ['date'],
            'participants' => ['string'],
            'description' => ['string'],
            'case' => ['bool'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        if ($request->case =='on')
        {
            $case=true;
        }
        else
        {
            $case=false;
        }

        $event = Event::find($id);
        $event->name = $request->input('title');
        $event->date = $request->input('date');
        $event->participants = $request->input('participants');
        $event->description = $request->input('description');
        $event->case = $case;
        if ($request->image)
        {
            $event->image = $this->uploadImagesArray($request->image, 'events/');
        }
        $event->save();
        $request->session()->flash('success_message', 'لقد تم تعديل الفعالية بنجاح');
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
        $event = Event::find($id);
        if($event){
            $event->delete();
        }
        return redirect()->route('events.index')->with('error_message','تم حذف التفاعلية بنجاح');
    }

    private function uploadImagesArray( $image, string $directory)
    {
        if ($image) {
            $extension = $image->getClientOriginalName();
            $name = time() . '.' . $extension;
            $image->move('storage/' . $directory . '/', $name);
            return $name;
        }
    }
}
