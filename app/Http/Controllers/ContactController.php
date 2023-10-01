<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;

class ContactController extends Controller
{
    //


    public function index(){
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->email,
            'email' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if($contact->save()){
            return redirect()->back()->with('success','Successful Send a Message');
        }else{
            return redirect()->back()->with('failed','Failed to Send Message');
        };
    }

    public function show(){
        $contacts = Contact::all();
        return view('contact.show', compact('contacts'));
    }
}
