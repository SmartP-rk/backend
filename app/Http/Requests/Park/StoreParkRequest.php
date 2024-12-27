<?php

namespace App\Http\Requests\Park;

use Illuminate\Foundation\Http\FormRequest;

class StoreParkRequest extends FormRequest
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
            'proprietor' => 'required|exists:users,id',
            'cnpj' => 'required|max:18|unique:parks|regex:/^(\d{2})\.(\d{3})\.(\d{3})\/(\d{4})\-(\d{2})$/',
            'name' => 'required|max:255',
            'phone' => 'required|max:14',
            'zcode' => 'required|max:9|regex:/^(\d{5})\-(\d{3})$/',
            'state' => 'required',
            'city' => 'required|max:255',
            'neighborhood' => 'required|max:255',
            'street' => 'required|max:255',
            'number' => 'required|max:255',
            'complement' => 'nullable|max:255',
            'vacancy_count' => 'required|numeric',
            'image' => 'nullable|extensions:jpg,png,jpeg,svg,webp'
        ];
    }

    public function messages(){
        return [
            'proprietor.required' => 'O campo proprietário é obrigatório',
            'proprietor.exists' => 'O proprietário informado não existe',
            'cnpj.required' => 'O campo CNPJ é obrigatório',
            'cnpj.unique' => 'Insira um CNPJ válido. Ex: 00.000.000/0000-00',
            'cnpj.regex' => 'Insira um CNPJ válido. Ex: 00.000.000/0000-00',
            'cnpj.max' => 'O CNPJ deve ter no máximo 18 caracteres',
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'phone.required' => 'O campo telefone é obrigatório',
            'phone.max' => 'O telefone deve ter no máximo 14 caracteres',
            'zcode.required' => 'O campo CEP é obrigatório',
            'zcode.max' => 'O CEP deve ter no máximo 9 caracteres',
            'zcode.regex' => 'Insira um CEP válido. Ex: 00000-000',
            'state.required' => 'O campo estado é obrigatório',
            'city.required' => 'O campo cidade é obrigatório',
            'city.max' => 'A cidade deve ter no máximo 255 caracteres',
            'neighborhood.required' => 'O campo bairro é obrigatório',
            'neighborhood.max' => 'O bairro deve ter no máximo 255 caracteres',
            'street.required' => 'O campo rua é obrigatório',
            'street.max' => 'A rua deve ter no máximo 255 caracteres',
            'number.required' => 'O campo número é obrigatório',
            'number.max' => 'O número deve ter no máximo 255 caracteres',
            'complement.max' => 'O complemento deve ter no máximo 255 caracteres',
            'vacancy_count.required' => 'O campo quantida de vagas é obrigatório',
            'vacancy_count.numeric' => 'A quantida de vagas deve ser do tipo númerico',
            // 'image' => ''
        ];
    }
}
