<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ciclo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciclo'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User','id_ciclo','id_ciclo');
    }
}
