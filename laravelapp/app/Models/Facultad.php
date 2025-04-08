<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'facultad';

    protected $primaryKey = 'id_facultad';

    // Campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'decano'];

    // Relación con Departamento
    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'id_facultad');
    }
}
