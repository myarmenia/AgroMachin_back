<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountingApplication extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'accounting_application_type_id',
        'name',
        'status'
    ];

    
}
