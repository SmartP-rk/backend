<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = [
        'proprietor',
        'cnpj',
        'name',
        'phone',
        'zcode',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
        'complement',
        'vacancy_count',
        'image'
    ];
    public function rules(){
        return
        [
            'proprietor' => 'required',
            'cnpj' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'zcode' => 'required',
            'state' => 'required',
            'city' => 'required',
            'neighborhood' => 'required',
            'street' => 'required',
            'number' => 'required',
            'complement' => 'nullable',
            'vacancy_count' => 'required',
            'image' => 'nullable'
        ];
    }
}
