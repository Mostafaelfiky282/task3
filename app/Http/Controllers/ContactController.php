<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\message;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|min:5|max:255',
            'subject' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:5|max:1000',
        ]);


        $message = new message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->content;
        $message->save();
        return redirect('/contact')->with('success', "Your Message has been sent Successfully");

    }
}
