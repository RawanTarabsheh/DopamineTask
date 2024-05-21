<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact.index');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);


        // Mail::send('emails.contact', $data, function($message) {
        //     $message->to('rawantarabsheh@gmail.com')
        //             ->subject('Contact Us Message');
        // });

        Mail::to('rawantarabsheh@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->message
        ));

        return back()->with('success', 'Thank you for contacting us!');
    }
}
