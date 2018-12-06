<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;

use App\Http\Requests;

class ContactController extends Controller
{
    public function showPage() {
        $title = "Contact";
        return view('pages.contact', ['title' => $title]);
    }
    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subiect' => 'required|max:255',
            'mesaj' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = htmlentities($request->input('name'));
        $contact->subject = htmlentities($request->input('subiect'));
        $contact->email = htmlentities($request->input('email'));
        $contact->mesaj = htmlentities($request->input('mesaj'));
        $contact->save();
        return 1;
    }
}
