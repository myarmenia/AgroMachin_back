<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'name',
        'status'
    ];

    public function language_sections(){

        return $this->hasMany(LanguageSection::class);
    }

}
