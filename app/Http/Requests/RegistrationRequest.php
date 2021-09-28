<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RegistrationRequest extends FormRequest
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
        return [
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','string'],
            'password_confirmation' => 'required',
            'full_name' => ['required','string','max:20'],
            'phone' => ['required','string','max:9'],
            'type' => ['required','string',Rule::in(['student','teacher','manager'])],
            'avatar' => ['string','image'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(sendError($validator->errors()->first(), null,422));
    }
}
