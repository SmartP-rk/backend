<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:100|regex:/^[\pL\s]+$/u',
            'email' => [
                'required_unless:user_type,3',
                'email:rfc,dns',
                Rule::unique('users')
                    ->where('user_type', $this->input('user_type'))
            ],
            'password' => 'required_unless:user_type,3|min:8|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z\d\s])[A-Za-z\d\W]{8,}$/',
            'cpf' => [
                'required',
                'min:11',
                'max:14',
                'regex:/^(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})$/',
                Rule::unique('users')
                    ->where('user_type', $this->input('user_type'))
            ],
            'phone' => 'required|min:11|max:15',
            'user_type' => 'required|numeric|min:1|max:3',
            'parcial_registration' => 'required_if:user_type,3|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O nome deve ter 100 caracteres',
            'name.regex' => 'Por favor insira um nome válido',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Insira um email válido',
            'email.unique' => 'Já existe um usuário cadastrado com esse email',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no minímo 8 caracteres',
            'password.regex' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.min' => 'O CPF deve ter no minímo 11 caracteres',
            'cpf.max' => 'O CPF deve ter no máximo 14 caracteres',
            'cpf.regex' => 'Insira um CPF válido. Ex: 000.000.000-00',
            'cpf.unique' => 'Por favor insira um CPF válido',
            'phone.required' => 'O campo telefone é obrigatório',
            'phone.min' => 'O telefone deve ter no minímo 11',
            'phone.max' => 'O telefone deve ter no máximo 15',
            'user_type.required' => 'O campo tipo de usuário é obrigatório',
            'user_type.numeric' => 'O tipo de usuário deve ser um número',
            'user_type.min' => 'O tipo de usuário deve ser entre 1 e 3',
            'user_type.max' => 'O tipo de usuário deve ser entre 1 e 3',
            'parcial_registration.required_if' => 'O campo cadastro parcial é obrigatório',
            'parcial_registration.boolean' => 'O campo cadastro parcial deve ser verdadeiro ou falso',
        ];
    }
}
