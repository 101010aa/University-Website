<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //Function to save new contact message
    public function store(Request $request)
    {
    // validate input
        $request->validate([
            'name' =>'required|string|max:255',
            'phone' =>'required|string|max:20',
            'message' =>'required|string',
        ]);
    
    // save to database
        $contact = Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

    // return json response
        return response()->json([
            'success'=> true,
            'message'=> 'Message submitted successfully',
            'data' => $contact,
        ], 201);
    }
}
   