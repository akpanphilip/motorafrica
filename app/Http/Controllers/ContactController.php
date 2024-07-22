<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'location' => 'required',
            'message' => 'required',
        ]);
        $html = "<h2>Contact Information</h2>" .
        "<p><b>Name:</b> " . $request->name . "</p>" .
        "<p><b>Email:</b> " . $request->email . "</p>" .
        "<p><b>Phone Number:</b> " . $request->phone_number . "</p>" .
        "<p><b>Location:</b> " . $request->location . "</p>" .
        "<p><b>Message:</b> " . $request->message . "</p>";

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->Host       = 'motorafrica.co'; 
            $mail->Username   = 'no-reply@motorafrica.co'; 
            $mail->Password   = '@noreply100%';
            $mail->Mailer = 'smtp';

            //Recipients
            $mail->setFrom('support@motorafrica.co', 'Motor Africa');
            $mail->addAddress('connect@motorafrica.co', 'motorafrica.co');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Form Submission';
            $mail->Body    = $html;
            $mail->AltBody = 'Email body in plain text format';

            $mail->send();
             return back()->with('message', 'Message sent!');
        } catch (Exception $e) {
            return back()->with('message', 'Message could not be  sent!');
        }
    }
}
