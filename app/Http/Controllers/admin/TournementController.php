<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tournement;
use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class TournementController extends Controller
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
        //
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
     if ($request->user)
     {
         $user = Users::find($request->user);
         foreach ($request->tournament as $tournament) {
             if ($tournament['name'] &&  $tournament['description'] && $tournament['type'])
             {
                 if ( array_key_exists('feature',$tournament))
                 {
                     if($tournament['feature']=='on')
                     {
                         $feature= true;
                     }
                 }
                 else
                 {
                     $feature= false;
                 }
                 Tournement::create([
                     'user_id' =>$user->id,
                     'name' =>$tournament['name'],
                     'description' =>$tournament['description'],
                     'feature'=>$feature,
                     'type'=>$tournament['type']
                 ]);
             }
         }
         return redirect()->back()->with('success_message','تمت اضافة المشاركات للمتناظر بنجاح');
     }
     else
     {
         dd('NO user');
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
        $user = Users::find($id);
        $userstournament=Tournement::where('user_id',$user->id)->get();
        return view('dashboard.tournament.Edit-show',compact('user','userstournament'));
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
        $tournement = Tournement::find($id);

        if($tournement){

            $tournement->delete();
        }
        return redirect()->back()->with('error_message','deleted');
    }
}
