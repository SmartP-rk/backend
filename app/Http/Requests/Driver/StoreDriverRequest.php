<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
            'cpf' => 'required|max:14|regex:/^(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})$/',
            'phone' => 'required|max:14'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.max' => 'O CPF deve ter no máximo 14 caracteres',
            'cpf.regex' => 'Insira um CPF válido. Ex: 000.000.000-00',
            'phone.required' => 'O campo telefone é obrigatório',
            'phone.max' => 'O telefone deve ter no máximo 14 caracteres'
        ];
    }
}
