<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclesModel extends Model
{
    protected $table = 'vehicles_models';
    protected $fillable = [
        'name',
        'year',
        'brand_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
