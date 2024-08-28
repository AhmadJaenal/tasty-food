<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::first();
        return view("landingPage.pages.contact", compact('contact'));
    }

    public function sendEmail(Request $request)
    {
        try {
            $dataEmail = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);
            Mail::to('ahmadjaenal629@gmail.com')->send(new sendEmail($dataEmail));
    
            $contact = Contact::first();
            return back()->with('success', 'Your message has been sent successfully!', compact('contact'));
        } catch (\Throwable $th) {
            return back()->with('failed', 'Your message failed to send!', compact('contact'));
        }
        
    }
}
