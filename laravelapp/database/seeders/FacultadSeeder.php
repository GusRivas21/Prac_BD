<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facultad = new Facultad();
        $facultad->nombre = 'Facultad de Ciencias';
        $facultad->decano = 'Juan Pérez';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->nombre = 'Facultad de Ingenierías';
        $facultad->decano = 'Ana Gómez';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->nombre = 'Facultad de Derecho';
        $facultad->decano = 'Carlos Martínez';
        $facultad->save();
    }
}
