<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'vehicle_mark_id',
        'name',
        'status'
    ];

    public function vehicle_mark(){
        return $this->belongsTo(VehicleMark::class, 'vehicle_mark_id');
    }
}
