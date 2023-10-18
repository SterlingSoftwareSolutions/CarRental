<?php

namespace App\Http\Controllers;

use PhpParser\Builder\Use_;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Mail\YourMailClass; // Import your mail class here

class ContactController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient'=> 'rumayanga51@gmail.com',
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'phone'=>$request->phone,
                'body' =>$request->message
            ];
            Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'])
                        ->phone($mail_data['phone']);
            });
            return redirect()->back()->with('success', 'Email Sent');
        }else {
            return redirect()->back()->withInput()->with('error', 'check');
        }
    }

    public function isOnline($site = 'http://youtube.com/'){
        if(@fopen($site, 'r')){
            return true;
        }else{
            return false;
        }
    }
}
