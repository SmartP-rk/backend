<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required | email:rfc',
            'password' => 'required | string '
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Por favor insira um email válido',
            'password.required' => 'O campo senha é obrigatório',
            'password.string' => 'A senha deve ser uma string',
        ];
    }
}
