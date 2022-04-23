<?php

namespace App\Contacts\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (!$this->contact) {
            return [
                'name' => ['required', 'string'],
                'contact' => ['required', 'string'],
                'email' => ['required', 'string'],
            ];
        }

        return [
            'name' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'email' => ['required', 'string'],
        ];
    }
}
