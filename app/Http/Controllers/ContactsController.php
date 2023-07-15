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
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'education_level' => 'required',
            'field' => 'required',
            'specialization' => 'nullable',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'age' => 'nullable',
            'interests' => 'required',
            'career_project' => 'required',
            'stage_requirements' => 'required'
        ]);

        Contact::create($data);

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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'education_level' => 'required',
            'field' => 'required',
            'specialization' => 'nullable',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'age' => 'nullable',
            'interests' => 'required',
            'career_project' => 'required',
            'stage_requirements' => 'required'
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return redirect('/')->with('success', 'Contact modifié avec succès');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/')->with('success', 'Contact supprimé avec succès');
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $contacts = Contact::query()
            ->where('first_name', 'like', "%{$key}%")
            ->orWhere('last_name', 'like', "%{$key}%")
            ->orWhere('gender', 'like', "%{$key}%")
            ->orWhere('education_level', 'like', "%{$key}%")
            ->orWhere('field', 'like', "%{$key}%")
            ->orWhere('specialization', 'like', "%{$key}%")
            ->orWhere('address', 'like', "%{$key}%")
            ->orWhere('phone_number', 'like', "%{$key}%")
            ->orWhere('email', 'like', "%{$key}%")
            ->orWhere('age', 'like', "%{$key}%")
            ->orWhere('interests', 'like', "%{$key}%")
            ->orWhere('career_project', 'like', "%{$key}%")
            ->orWhere('stage_requirements', 'like', "%{$key}%")
            ->get();

        return view('search', compact('contacts', 'key'));
    }
}
