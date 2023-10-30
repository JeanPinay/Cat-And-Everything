<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class CatsittingController extends Controller
{
    public function showCatsitting(){
        return view('catsitting.cat');
    }
    
    public function bookCatSitter(Request $request){
        $validatedData = $request->validate([
            'fullName' => 'required|max:255',
            'emailAddress' => 'required|email',
            'contactNumber' => 'required',
            'address' => 'required',
            'specialInstructions' => 'nullable',
            'serviceDate' => 'required|date',  
            'serviceTime' => 'required|date_format:H:i',
        ]);
        
        // After validation, send the email
        Mail::to('contact.catandeverything@gmail.com')->send(new BookingMail($validatedData));
        
        // Redirect or inform the user of successful booking
        return back()->with('success', 'Booking request sent successfully!');
    }
}
