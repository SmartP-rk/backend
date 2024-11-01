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
}
