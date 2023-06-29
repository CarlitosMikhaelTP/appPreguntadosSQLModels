<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respuestas extends Model
{
    use HasFactory;

    protected $fillable = [
        'respuestas',
        'estado'
    ];

    public function preguntas(): HasMany
    {
        return $this->hasMany('App\Models\Preguntas','id_respuesta','id_respuesta');
    }


}
