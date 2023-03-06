<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageSection extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'name',
        'language_id'
    ];

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }

}
