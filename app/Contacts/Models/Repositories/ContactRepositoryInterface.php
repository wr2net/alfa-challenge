<?php

namespace App\Contacts\Models\Repositories;

use App\Contacts\Models\Contact;

interface ContactRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function findById(int $id);

    /**
     * @inheritDoc
     */
    public function findAll();

    /**
     * @inheritDoc
     */
    public function store(array $data);

    /**
     * @inheritDoc
     */
    public function update(Contact $contact, array $data);

    /**
     * @inheritDoc
     */
    public function enable(Contact $contact);

    /**
     * @inheritDoc
     */
    public function disable(Contact $contact);

    /**
     * @inheritDoc
     */
    public function destroy(Contact $contact);
}
