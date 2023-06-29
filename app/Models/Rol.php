<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'rol'
    ];

    public function rol(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User');
    }
}
