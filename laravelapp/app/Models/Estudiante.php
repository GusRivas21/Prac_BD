<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'estudiante';

    protected $primaryKey = 'id_estudiante';

    // Campos asignables
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'email', 'direccion', 'telefono'];

    // Relación con Inscripcion
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_estudiante');
    }
}
