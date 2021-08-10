<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoGenerateUuid;

class Currency extends Model
{
    use HasFactory, AutoGenerateUuid;

    protected $table = 'currencies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'acronym',
        'symbol',
    ];

    /**
     * Obtiene a los usuarios asociado al rol.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
