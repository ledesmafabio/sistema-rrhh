<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'id_estado_civil');
    }
}