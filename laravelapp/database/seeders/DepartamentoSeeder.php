<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facultades = Facultad::pluck('id_facultad'); // Obtenemos todos los IDs de facultades

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de Matemáticas';
        $departamento->ubicacion = 'Bloque A';
        $departamento->id_facultad = $facultades->random();
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de Física';
        $departamento->ubicacion = 'Bloque B';
        $departamento->id_facultad = $facultades->random();
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de Derecho Penal';
        $departamento->ubicacion = 'Bloque C';
        $departamento->id_facultad = $facultades->random();
        $departamento->save();
    }
}
