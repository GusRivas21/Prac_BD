<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'inscripcion';

    //Llave primaria
    protected $primaryKey = 'id_inscripcion';

    // Campos asignables
    protected $fillable = ['id_estudiante', 'id_curso', 'fecha_inscripcion', 'calificacion'];

    // Relación con Estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    // Relación con Curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
