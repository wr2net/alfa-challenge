<?php

namespace App\Contacts\Controllers\Web;

use App\Contacts\Models\Contact;
use App\Contacts\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.store');
    }

    public function store(ContactRequest $request)
    {
        $data = $request;

        $contact = new Contact;
        $contact->name = $data['name'];
        $contact->contact = $data['contact'];
        $contact->email = $data['email'];

        if ($this->handleEmail($data['email'])) {
            $contact = [
                'name' => $data['name'],
                'contact' => $data['contact'],
                'email' => $data['email'],
                'error' => "This email already exists. Try again, please.",
            ];
            (object)$contact;
            return view('contacts.store', compact('contact'));
        }

        $contact->save();
        return $this->index();
    }

    public function show($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('contacts.update', compact('contact'));
    }

    public function update(ContactRequest $request, $contact_id)
    {
        $data = $request;
        $contact = Contact::where('id', $contact_id)->first();
        $contact->name = $data['name'];
        $contact->contact = $data['contact'];
        $contact->email = $data['email'];
        $contact->save();
        return $this->index();
    }

    public function destroy($contact_id)
    {
        Contact::where('id', $contact_id)->delete();
        return $this->index();
    }

    private function handleEmail($email)
    {
        $contact = Contact::where('email', $email);
        return view('contacts.show', compact('contact'));
    }

    public function list()
    {
        $contacts = Contact::all();
        return view('contacts.list', compact('contacts'));
    }

    public function view($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('contacts.view', compact('contact'));
    }
}
