<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'descripcion',
        'departamento_id',
        'campo_identificador',
    ];

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

}
