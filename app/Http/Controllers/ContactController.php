<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Mail\Message;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
       Mail::raw("Name: {$data['name']}\nEmail: {$data['email']}\n\nMessage:\n{$data['message']}", function ($message) use ($data) {
    $message->to('ravindu0117@gmail.com')
            ->subject('New message from your portfolio');
});

        return back()->with('success', 'Your message has been sent!');
    }
}
