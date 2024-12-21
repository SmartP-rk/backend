<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpf',
        'phone'
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'driver_id');
    }

    public function park(){
        return $this->belongsTo(Park::class, 'park');
    }
}
