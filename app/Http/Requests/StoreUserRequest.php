<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'cpf' => 'required|min:11|max:14|unique:users|regex:/^(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})$/',
            'phone' => 'required|min:11|max:15',
            'image' => 'nullable|extensions:png,jpeg,jpg',
            'user_type' => 'required|numeric|min:0|max:3'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O nome deve ter 255 caracteres',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Insira um email válido',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no minímo 8 caracteres',
            'password.regex' => 'A senha deve ter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caracter especial',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.min' => 'O CPF deve ter no minímo 11 caracteres',
            'cpf.max' => 'O CPF deve ter no máximo 14 caracteres',
            'cpf.regex' => 'Insira um CPF válido. Ex: 000.000.000-00',
            'phone.required' => 'O campo telefone é obrigatório',
            'phone.min' => 'O telefone deve ter no minímo 11',
            'phone.max' => 'O telefone deve ter no máximo 15',
            'image.extensions' => 'A imagem deve ser nas extensões png, jpeg, jpg',
            'user_type.required' => 'O campo tipo de usuário é obrigatório',
            'user_type.numeric' => 'O tipo de usuário deve ser um número',
            'user_type.min' => 'O tipo de usuário deve ser entre 0 e 3',
            'user_type.max' => 'O tipo de usuário deve ser entre 0 e 3'
        ];
    }
}
