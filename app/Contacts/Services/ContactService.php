<?php

namespace App\Contacts\Services;

use App\Contacts\Models\Contact;
use App\Contacts\Models\Repositories\ContactRepositoryInterface as ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function findAll()
    {
        return $this->contactRepository->findAll();
    }

    public function store(array $data): Contact
    {
        return $this->contactRepository->store($data);
    }

    public function update(Contact $contact, array $data): Contact
    {
        return $this->contactRepository->update($contact, $data);
    }

    public function enable(Contact $contact): Contact
    {
        return $this->contactRepository->enable($contact);
    }

    public function disable(Contact $contact): Contact
    {
        return $this->contactRepository->disable($contact);
    }

    public function destroy(Contact $contact)
    {
        return $this->contactRepository->destroy($contact);
    }
}
