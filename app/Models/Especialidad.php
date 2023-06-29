<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function pregunta(): HasMany
    {
        return $this->hasMany('App\Models\Preguntas','id_especialidad','id_especialidad');
    }

}
