<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController
{
    public function __invoke(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return view('contact.thanks');
    }
}
