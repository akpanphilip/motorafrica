<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function submit(Request $request){
        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
        //    'service' => 'required',
           'location' => 'required',
           'phone_number' => 'required',
           'message' => 'required',
       ]);
       
        $html = "Hello, Good day!" . "\n\n" . 
               "Name: " .$request->name. "\n" .
                "Email: " .$request->email. "\n" .
                // "Service: " .$request->service. "\n" .
                "Location: " .$request->location. "\n" .
                "Phone Number: " .$request->phone_number. "\n" .
                "Message: " .$request->message. "\n\n" . "\n";

       $subject = "Motor Africa";

       Mail::raw($html, function ($message) use ($subject) {

           $message->to("connect@motorafrica.co")
               ->subject($subject);
       });
       return back()->with('message', 'Successfully sent!');
   }
}
