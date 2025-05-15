<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'color',
        'year',
        'mark',
        'model',
        'category',
        'plate'
    ];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
