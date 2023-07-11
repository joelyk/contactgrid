<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
         $contacts = Contact::all();
         return view('contacts', compact('contacts'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $c= new Contact();
        $c-> name = $request-> name;
        $c-> address = $request->address;
        $c -> phone_number = $request->phone_number;
        $c-> email = $request->email;
        $c ->save();
       return redirect(route('contacts.index'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);

        
        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return redirect('/')->with('success', 'contact Supprime avec succès');
  
        //return redirect()->route('contacts')->with('success', 'contact Modifié avec succès');
    }
    public function destroy($id)
    {

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/')->with('success', 'contact Supprime avec succès');

    }

    public function search(Request $request)
{
    $key = trim($request->get('q'));

    $contacts = Contact::query()
        ->where('name', 'like', "%{$key}%")
        ->orWhere('address', 'like', "%{$key}%")
        ->orWhere('phone_number', 'like', "%{$key}%")
        ->orWhere('email', 'like', "%{$key}%")
        ->get();

    return view('search', compact('contacts', 'key'));
}

}
