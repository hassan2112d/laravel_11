<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'age' => 'required|numeric',
            'phone' => 'required|numeric',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'username.required' => 'Username is empty!',
            'useremail.required' => 'Email is empty!',
            'useremail.email' => 'Enter the Correct format of email',
            'age.required' => 'Age is empty!',
            'phone.required' => 'Phone is empty!',
            'password.required' => 'Password is empty!'
        ];
    }
}
