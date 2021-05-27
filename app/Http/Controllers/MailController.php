<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::paginate( 20 );
        return view('dashboard.email.index', ['messages' => $messages]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Contact::find($id);
        return view('dashboard.email.edit', [ 'message' => $message ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Contact::find($id);
        return view('dashboard.email.edit', [ 'message' => $message ]);
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

        if ($request->read)
        {
            $message = Contact::find($id);
            $message->read = true;
            $message->save();
            $request->session()->flash('success_message', 'رسالة مقروءة');
        }

        return redirect()->route('mail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $template = Contact::find($id);
        if($template){
            $template->delete();
        }
        $request->session()->flash('error_message', 'تم حذف الرسالة');
        return redirect()->route('mail.index');
    }

    public function prepareSend($id){
        $template = EmailTemplate::find($id);
        return view('dashboard.email.send', [ 'template' => $template ]);
    }

    public function send($id, Request $request){
        $template = EmailTemplate::find($id);
        Mail::send([], [], function ($message) use ($request, $template)
        {
            $message->to($request->input('email'));
            $message->subject($template->subject);
            $message->setBody($template->content,'text/html');
        });
        $request->session()->flash('message', 'Successfully sended Email');
        return redirect()->route('mail.index');
    }
}
