<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Plate;

class StoreVehicleRequest extends FormRequest
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
            'driver_id' => 'required|exists:drivers,id',
            'color' => 'required|max:255',
            'year' => 'required|max:4|regex:/^\d{4}$/',
            'mark' => 'required|max:255',
            'model' => 'required|max:255',
            'category' => 'required|max:255',
            'plate' => ["required", "max:8", new Plate],
            // 'plate' => 'required|max:8|regex:/^([A-Z]{3}-\d{4}|[A-Z]{3}\d[A-Z]\d{2})$/',
        ];
    }

    public function messages(){
        return [
            'driver_id.required' => 'O campo motorista é obrigatório',
            'driver_id.exists' => 'O motorista informado não existe',
            'color.required' => 'O campo cor é obrigatório',
            'color.max' => 'A cor deve ter no máximo 255 caracteres',
            'year.required' => 'O campo ano é obrigatório',
            'year.max' => 'O ano deve ter no máximo 4 caracteres',
            'year.regex' => 'Insira um ano válido. Ex: 2000',
            'mark.required' => 'O campo marca é obrigatório',
            'mark.max' => 'A marca deve ter no máximo 255 caracteres',
            'model.required' => 'O campo modelo é obrigatório',
            'model.max' => 'O modelo deve ter no máximo 255 caracteres',
            'category.required' => 'O campo categoria é obrigatório',
            'category.max' => 'A categoria deve ter no máximo 255 caracteres',
            'plate.required' => 'O campo placa é obrigatório',
            'plate.max' => 'A placa deve ter no máximo 8 caracteres',
        ];
    }
}
