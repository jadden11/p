<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('user');
    }
    public function contact()
    {
        return view('contact');
    }

    public function contactsend(Request $request)
    {
        $contact = Contact::create([
            'fristname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return redirect('/home');
    }
}
