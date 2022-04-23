<?php

namespace App\Contacts\Controller\Api;

use App\Http\Controllers\Controller;
use App\Contacts\Models\Contact;
use App\Contacts\Requests\ContactRequest;
use App\Contacts\Resources\ContactResource;
use App\Contacts\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    private $service;

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $list = $this->service->findAll();
        return ContactResource::collection($list);
    }

    public function store(ContactRequest $request)
    {
        $contact = $this->service->store($request->validated());
        return response()->json($contact, Response::HTTP_CREATED);
    }

    public function show(Contact $contact)
    {
        return response()->json($contact, Response::HTTP_OK);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact = $this->service->update($contact, $request->validated());
        return response()->json($contact, Response::HTTP_OK);
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('destroy', $contact);
        $this->service->destroy($contact);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
