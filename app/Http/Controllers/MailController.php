<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function sendEmail (Request $request) {
        
    $name = $request->input('user_names');
      $email = $request->input('user_email');
      $telephone = $request->input('user_phone');
      $message = $request->input('user_message');
      


    Mail::to('ofis@yulianmollov.bg')->send(new ContactForm($name, $email, $telephone, $message));

    return response()->json(["status" => "success"]);

    }

    public function contactForm ()  {
         
        return view('mail.contact-form');
    }
    

}
