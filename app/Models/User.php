<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\AutoGenerateUuid;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, AutoGenerateUuid, HasApiTokens;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'name',
        'email',
        'password',
        'rol',
        'estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Obtiene a el rol relaciondo con el usuario
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Obtiene el pais relaciondo con el usuario
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Obtiene la Agencia relaciondo con el usuario
     */
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    /**
     * Obtiene la moneda relaciondo con el usuario
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
