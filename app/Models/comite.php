<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
    ];

    public function usuario()
    {
        return $this->hasOne('App\Models\User','id_usuario','id_usuario');
    }
}
