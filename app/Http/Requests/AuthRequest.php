<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): mixed
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    /**
     * Get the validation messages
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email' => 'The field email is required.',
            'password' => 'The field password is required.'
        ];
    }
}