<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Estudiante;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FacultadSeeder::class,
            DepartamentoSeeder::class,
            ProfesorSeeder::class,
        ]);

        Curso::factory(15)->create();
        Estudiante::factory(30)->create();

        $this->call([
            InscripcionSeeder::class, 
        ]);
    }
}
