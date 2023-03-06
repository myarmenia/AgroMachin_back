<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleMark extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name',
        'status'
    ];

    public function vehicle_models(){

        return $this->hasMany(VehicleModel::class);
    }
}
