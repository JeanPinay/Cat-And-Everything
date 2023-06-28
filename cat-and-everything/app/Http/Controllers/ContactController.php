<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
{
    $info = [
        'name' => 'required|min:3',     
        'email' => 'required|email',   
        'message' => 'required|min:10',
    ];
    // Validate the request data using the rules defined above
    $request->validate($info);
    
    // Retrieve the validated form data
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    $contact = new Contact(); //this my model file name, meaning I will save the new intances to this function
    $contact->name = $name; //variables above
    $contact->email = $email;
    $contact->message = $message;
    $contact->save();

    return redirect()->route('homepage')->with('success', 'Thank you for contacting us. We will get back to you soon.');
}
}