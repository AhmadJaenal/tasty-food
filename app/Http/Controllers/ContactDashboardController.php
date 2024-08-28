<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactDashboardController extends Controller
{
    public function contactDashboard() 
    {
        $contact = Contact::first();
        return view('dashboard.pages.contact.contact', compact('contact'));
    }

    public function update(Request $request, $id) 
    {
        try {
            $request->validate([
                'phone_number' => 'required|string|max:13',
                'email' => 'required|string|max:255',
                'location' => 'required|string|max:255',
            ]);

            $news = Contact::findOrFail($id);

            $news->phone_number = $request->phone_number;
            $news->email = $request->email;
            $news->location = $request->location;
            $news->updated_at = Now();

            $news->save();

            return back()->with('success', 'Contact updated successfully.');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to update Contact.');
        }
    }
}
