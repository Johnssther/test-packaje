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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $email = 'john.' . substr(str_shuffle($permitted_chars), 0, 16) . '@securityadmin.com';

        $permitted_chars_alert = '12345';
        $alert = substr(str_shuffle($permitted_chars_alert), 0, 1);

        // $contact = new Contact();
        // $contact->name = "john alejandro";
        // $contact->surname = "hernandez rodriguez";
        // $contact->phone = "3124224944";
        // $contact->alert = $alert;
        // $contact->email = $email;
        // $contact->save();

        $query = Contact::query();
        $query->orderBy('id', 'desc');
        if($request->filled('filter_alert')) {
            $query->where('alert', $request->filter_alert);
        }
        $contacts = $query->get();
        return view('inspire::contacts.index', compact('contacts'));

        return response()->json(["success" => true, 'data' => $contacts]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inspire::contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // dd( $data );
        // $contact = new Contact();
        // $contact->fillable($data);
        // $contact->save();

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->phone = $request->phone;
        $contact->alert = $request->alert;
        $contact->email = $request->email;
        $contact->save();

        return redirect()->route('inspire.contacts.index');

    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('inspire::contacts.show', compact('contact'));
    }
}
