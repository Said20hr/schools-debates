<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CRM;
use App\Models\User;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (CRM::count() < 1 )
        {
            $edit = false;
            return view('dashboard.content.index',compact('edit'));
        }
        else
        {
            $content = CRM::first();
            $edit = true;
            return view('dashboard.content.index',compact('edit','content'));
        }

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


        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title1' => ['nullable','string'],
            'title2' => ['nullable','string'],
            'title3' => ['nullable','string'],
            'title4' => ['nullable','string'],
            'title5' => ['nullable','string'],
            'title6' => ['nullable','string'],
            'description1' => ['nullable','string'],
            'description2' => ['nullable','string'],
            'description3' => ['nullable','string'],
            'description4' => ['nullable','string'],
            'description5' => ['nullable','string'],
            'description6' => ['nullable','string'],
            'description7' => ['nullable','string'],
            'description8' => ['nullable','string'],
            'description9' => ['nullable','string'],
            'description10' => ['nullable','string'],
            'yt' => ['nullable','string'],
            'ig' => ['nullable','string'],
            'fb' => ['nullable','string'],
            'tw' => ['nullable','string'],
        ]);

        $content =  CRM::create([
            'title_1' => $request->title1,
            'title_2' => $request->title2,
            'title_3' => $request->title3,
            'title_4' => $request->title4,
            'title_5' => $request->title5,
            'title_6' => $request->title6,
            'text_1' => $request->description1,
            'text_2' => $request->description2,
            'text_3' => $request->description6,
            'text_4' => $request->description7,
            'text_5' => $request->description8,
            'text_6' => $request->description9,
            'description' => $request->description10,
            'address' => $request->address,
            'phone_1' => $request->phone_1,
            'phone_2' => $request->phone_2,
            'email_1' => $request->email_1,
            'email_2' => $request->email_2,
            'tw' => $request->tw,
            'fb' => $request->fb,
            'yt' => $request->yt,
            'ig' => $request->ig,
            'note_1' => $request->description3,
            'note_2' => $request->description4,
            'note_3' => $request->description5,

        ]);

        return redirect()->back()->with('success_message','تم اضافة المحتوى بنجاح');
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
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title1' => ['nullable','string'],
            'title2' => ['nullable','string'],
            'title3' => ['nullable','string'],
            'title4' => ['nullable','string'],
            'title5' => ['nullable','string'],
            'title6' => ['nullable','string'],
            'description1' => ['nullable','string'],
            'description2' => ['nullable','string'],
            'description3' => ['nullable','string'],
            'description4' => ['nullable','string'],
            'description5' => ['nullable','string'],
            'description6' => ['nullable','string'],
            'description7' => ['nullable','string'],
            'description8' => ['nullable','string'],
            'description9' => ['nullable','string'],
            'description10' => ['nullable','string'],
            'yt' => ['nullable','string'],
            'ig' => ['nullable','string'],
            'fb' => ['nullable','string'],
            'tw' => ['nullable','string'],
        ]);


        $content = CRM::find($id);
        $content->title_1 = $request->title1;
            $content->title_2 = $request->title2;
            $content->title_3 = $request->title3;
            $content->title_4 = $request->title4;
            $content->title_5 = $request->title5;
            $content->title_6 = $request->title6;
            $content->text_1 = $request->description1;
            $content->text_2 = $request->description2;
            $content->text_3 = $request->description6;
            $content->text_4 = $request->description7;
            $content->text_5 = $request->description8;
            $content->text_6 = $request->description9;
            $content->description = $request->description10;
            $content->address = $request->address;
            $content->phone_1 = $request->phone_1;
            $content->phone_2 = $request->phone_2;
            $content->email_1 = $request->email_1;
            $content->email_2 = $request->email_2;
            $content->tw = $request->tw;
            $content->fb = $request->fb;
            $content->yt = $request->yt;
            $content->ig = $request->ig;
            $content->note_1 = $request->description3;
            $content->note_2 = $request->description4;
            $content->note_3 = $request->description5;
            $content->save();
            $request->session()->flash('success_message', 'لقد تم تعديل المحتوي بنجاح');
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
        //
    }

}
