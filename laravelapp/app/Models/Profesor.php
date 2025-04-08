<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'profesor';

    protected $primaryKey = 'id_profesor';

    // Campos asignables
    protected $fillable = ['nombre', 'apellido', 'titulo', 'email', 'id_departamento'];

    // Relación con Departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    // Relación con Curso
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_profesor');
    }
}
