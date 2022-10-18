<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email
        );

        Mail::to('technoscape@bncc.net')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us');
    }
}
