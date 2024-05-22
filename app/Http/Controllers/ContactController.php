<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
    public function sendEmail(Request $request)
    {
        // Define custom messages
        $messages = [
            'name.required' => 'Please enter your name.',
            'email.required' => 'We need to know your email address!',
            'email.email' => 'Your email address must be valid.',
            'subject.required' => 'Please enter the subject.',
            'message.required' => 'Please enter your message.',
        ];

        // Validate the request with custom messages
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], $messages);

        // Send email
        $contactMail = new ContactMail(
            $request->name,
            $request->subject,
            $request->email,
            $request->message
        );

        // If CC is provided, add it
        if ($request->filled('cc')) {
            $contactMail->cc('hr@dopaminetechnology.com');
        }

        Mail::to('rawantarabsheh@gmail.com')->send($contactMail);


        return back()->with('success', 'Thank you for contacting us!');
    }
}
