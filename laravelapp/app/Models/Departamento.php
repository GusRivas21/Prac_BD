<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'departamento';

    protected $primaryKey = 'id_departamento';

    // Campos asignables
    protected $fillable = ['nombre', 'ubicacion', 'id_facultad'];

    // Relación con Facultad
    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'id_facultad');
    }

    // Relación con Profesor
    public function profesores()
    {
        return $this->hasMany(Profesor::class, 'id_departamento');
    }
}