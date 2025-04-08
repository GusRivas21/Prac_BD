<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function index(){
        //Opcion 1: Lazy Loading (Carga Perezosa)
        //$inscripciones =Inscripcion::all();// Solo carga inscripciones
        //foreach ($inscripciones as $inscripcion) {
            //Cada acceso a estudiante del curso generara consultas adicionales
            //$inscripcion->Estudiante->nombre;
            //$inscripcion->Curso->nombre;
        //}

        $start = microtime(true);
        $inscripciones = Inscripcion::with(['estudiante', 'curso'])->paginate(5);

        $end = microtime(true);
        $duracion = round($end - $start, 4);

        return view('inscripciones.index', compact('inscripciones', 'duracion'));
    }
}
