<?php

namespace App\Http\Requests;

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


//    protected function prepareForValidation()
//    {
//        if ($this->phone) {
//            $this->merge([
//                'phone' => preg_replace('~\D+~', '', $this->phone),
//            ]);
//        }
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['email'],
            'phone' => ['required', 'string'],
//            'phone' => ['required', 'string', 'regex:/^\+380\d{9}$/'],
            'message' => ['required', 'string'],

        ];
    }
}
