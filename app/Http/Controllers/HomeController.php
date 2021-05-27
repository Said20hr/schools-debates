<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Newsletter;
use App\Models\Tournement;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=User::with('tournaments')->whereHas('tournaments',function($query){
            $query->select('user_id', Tournement::raw('count(*) as total'))
                ->groupBy('user_id');
        })->get();
        $blogs=Blog::take(3)->get();
        $students_count = User::where('role','student')->get()->count();
        $coaches_count = User::where('role','coach')->get()->count();
        $event_count = Event::get()->count();
        return view('pages.home',compact('students','blogs','students_count','coaches_count','event_count'));
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
        $validatedData = $request->validate([
            'email' => ['required', 'email','unique:newsletters'],
        ]);
        Newsletter::create([
            'email' => $request->email
        ]);
        $request->session()->flash('success_message', 'لقد تم تسحيللك في الرسائل بنجاح');
        return redirect()->back();
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
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function students()
    {
        $students=User::where('role','student')
            ->where('status',true)
            ->paginate(12);
        return view('pages.students',compact('students'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function coaches()
    {
        $coaches=User::where('role','coach')
            ->where('status',true)
            ->paginate(12);
        return view('pages.coaches',compact('coaches'));
    }
}
