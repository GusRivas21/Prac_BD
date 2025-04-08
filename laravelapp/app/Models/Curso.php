<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'curso';

    protected $primaryKey = 'id_curso';

    // Campos asignables
    protected $fillable = ['codigo', 'nombre', 'creditos', 'id_profesor'];

    // Relación con Profesor
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor');
    }

    // Relación con Inscripcion
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_curso');
    }
}
