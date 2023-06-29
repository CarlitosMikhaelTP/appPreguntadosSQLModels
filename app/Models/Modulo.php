<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'modulo'
    ];

    public function preguntas(): HasMany
    {
        return $this->hasMany('App\Models\Preguntas','id_modulo','id_modulo');
    }
}
