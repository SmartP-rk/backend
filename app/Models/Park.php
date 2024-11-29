<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;
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

    public function proprietor(){
        return $this->belongsTo(User::class, 'proprietor');
    }
}
