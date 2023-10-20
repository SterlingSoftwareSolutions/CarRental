<?php

namespace App\Http\Controllers;

use PhpParser\Builder\Use_;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('example@gmail.com')->send(new ContactMail($request));
        return redirect()->back()->with('success', 'Email Sent');
    }

}
