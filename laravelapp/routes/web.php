<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscripcionController;

Route::get('/', [InscripcionController::class, 'index']);