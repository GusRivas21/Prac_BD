<?php

namespace Database\Seeders;

use App\Models\Profesor;
use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = Departamento::pluck('id_departamento'); // Obtenemos todos los IDs de departamentos

        $profesor = new Profesor();
        $profesor->nombre = 'Pedro Soto';
        $profesor->apellido = 'Ramírez';
        $profesor->titulo = 'Dr.';
        $profesor->email = 'pedro.soto@uni.com';
        $profesor->id_departamento = $departamentos->random();
        $profesor->save();

        $profesor = new Profesor();
        $profesor->nombre = 'María López';
        $profesor->apellido = 'García';
        $profesor->titulo = 'MSc.';
        $profesor->email = 'maria.lopez@uni.com';
        $profesor->id_departamento = $departamentos->random();
        $profesor->save();

        $profesor = new Profesor();
        $profesor->nombre = 'Luis Díaz';
        $profesor->apellido = 'Martínez';
        $profesor->titulo = 'Lic.';
        $profesor->email = 'luis.diaz@uni.com';
        $profesor->id_departamento = $departamentos->random();
        $profesor->save();
    }
}
