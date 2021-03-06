<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoGenerateUuid;

class Agency extends Model
{
    use HasFactory, AutoGenerateUuid;

    protected $table = 'agencies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Obtiene a los usuarios que pertenecen a una agencia
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
