<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;

class MailSend extends Controller
{
    public function mailsend(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $phone =$request['phone'];
        $message = $request['message'];
        $details =[
            'title' => 'Message From Customer '.$name,
            'name' => $name,
            'message'=> $message,
            'email' => $email,
            'phone'=> $phone,
        ];
        \Mail::to('alexnewzniyo@gmail.com')->send(new SendMail($details));
        return view('thanks');
    }
}
