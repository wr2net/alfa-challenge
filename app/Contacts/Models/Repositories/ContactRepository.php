<?php

namespace App\Contacts\Models\Repositories;

use App\Contacts\Models\Contact;
use Exception;

class ContactRepository implements ContactRepositoryInterface
{
    public function findById(int $id)
    {
        return Contact::withTrashed()
            ->findOrFail($id);
    }

    public function findAll()
    {
        return Contact::withTrashed()
            ->get();
    }

    public function store(array $data)
    {
        $contact = new Contact;
        $contact->name = $data['name'];
        $contact->contact = $data['contact'];
        $contact->email = $data['email'];
        $contact->save();
        return $contact;
    }

    public function update(Contact $contact, array $data)
    {
        $contact->name = $data['name'];
        $contact->contact = $data['contact'];
        $contact->email = $data['email'];
        $contact->save();
        return $contact;
    }

    public function enable(Contact $contact)
    {
        $contact->restore();
        return $contact;
    }

    public function disable(Contact $contact)
    {
        $contact->delete();
        return $contact;
    }

    public function destroy(Contact $contact)
    {
        $contact->forceDelete();
        return null;
    }
}
