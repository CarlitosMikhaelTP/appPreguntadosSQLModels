<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function alumno(): BelongsTo
    {
        return $this->belongsTo('App\Models\Alumno','id_usuario','id_usuario');
    }

    public function profesor(): BelongsTo
    {
        return $this->belongsTo('App\Models\Profesor','id_usuario','id_usuario');
    }

    public function especialidad(): HasOne
    {
        return $this->hasOne('App\Models\Especialidad','id_especialidad','id_especialidad');
    }

    public function ciclo(): HasOne
    {
        return $this->hasOne('App\Models\Ciclo','id_ciclo','id_ciclo');
    }

    public function curso(): HasOne
    {
        return $this->hasOne('App\Models\Curso','id_curso','id_curso');
    }
}