<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getAllProspects()
    {
        return Contact::where('status', 'prospect')->get()->toArray();
    }

    public function addContact(Request $request)
    {
        $validated = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'age' => 'required|integer',
        ]);
    
        try {
            Contact::create($validated);
            return redirect('/');
        } catch (\Exception $e) {
            Log::error('Error creating contact: ' . $e->getMessage()); // Log error to file
            return back()->withErrors(['error' => 'An error occurred while adding the contact.']);
       
        }
    }
    

    public function updateStatusToClient($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 'client';
        $contact->save();
        return response()->json(['message' => 'Contact status updated to client']);
    }

    public function getContactById($id)
    {
        return Contact::findOrFail($id);
    }

    public function getContactByMobile($mobile)
    {
        return Contact::where('mobile', $mobile)->first();
    }

    public function convertToClient($id)
    {
        $contact = Contact::where('id', $id)->where('status', 'prospect')->firstOrFail();
        $contact->status = 'client';
        $contact->conversion_date = now();
        $contact->save();
        return response()->json(['message' => 'Contact converted to client']);
    }

    public function getAllActiveClients()
    {
        return Contact::where('status', 'client')->where('client_rating', '!=', 'dud')->count();
    }

    public function updateStatusActivity(Request $request)
    {
        $contact = Contact::findOrFail($request->contact_id);
        $contact->status_activities()->create($request->all()); // Assuming you have a relationship
        return response()->json(['message' => 'Status activity updated']);
    }
}

