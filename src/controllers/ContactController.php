<?php

namespace Fhsinchy\Inspire\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Fhsinchy\Inspire\Models\Contact;

class ContactController
{
    public function __invoke()
    {
        return "Contactos";
    }

    public function index(Request $request)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $email = 'john.' . substr(str_shuffle($permitted_chars), 0, 16) . '@securityadmin.com';

        $contact = new Contact();
        $contact->name = "john alejandro";
        $contact->surname = "hernandez rodriguez";
        $contact->phone = "3124224944";
        $contact->email = $email;
        $contact->save();

        $contacts = Contact::orderBy("id", "desc")->get();
        return view('inspire::contacts.index', compact('contacts'));
        
        return response()->json(["success" => true, 'data' => $contacts]);


    }

    public function show($id)
    {
        dd($id);
    }
}
