<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'driver_id',
        'color',
        'year',
        'mark',
        'model',
        'category',
        'plate'
    ];

    public function drivers(){
        return $this->belongsTo(Driver::class);
    }
}
