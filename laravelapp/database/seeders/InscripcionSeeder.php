<?php

namespace Database\Seeders;

use App\Models\Inscripcion;
use App\Models\Estudiante;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = Estudiante::pluck('id_estudiante'); // Obtener los IDs de estudiantes
        $cursos = Curso::pluck('id_curso'); // Obtener los IDs de cursos

        // Crear 10 inscripciones aleatorias
        foreach (range(1, 10) as $index) {
            $inscripcion = new Inscripcion();
            $inscripcion->id_estudiante = $estudiantes->random(); // Asignar un estudiante aleatorio
            $inscripcion->id_curso = $cursos->random(); // Asignar un curso aleatorio
            $inscripcion->fecha_inscripcion = now();
            $inscripcion->calificacion = rand(0, 10); // Calificación aleatoria entre 0 y 10
            $inscripcion->save();
        }
    }
}
