<?php

namespace App\Http\Controllers\Contact;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function index()
    {
        return view('pages.contact.contact-index');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'subject' => request('subject'),
            'message' => request('message')
        ]);
        Mail::to('uzzolah@gmail.com')->send(new ContactFormMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }
}
