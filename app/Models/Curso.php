<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User','id_curso','id_curso');
    }
}
