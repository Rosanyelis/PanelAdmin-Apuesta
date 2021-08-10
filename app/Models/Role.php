<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoGenerateUuid;

class Role extends Model
{
    use HasFactory, AutoGenerateUuid;

    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Obtiene a los usuarios asociado al rol.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
