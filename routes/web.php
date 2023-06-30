<?php

use App\Http\Controllers\RespuestasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/alumno',[App\Http\Controllers\AlumnoController::class,'index']);
// Route::get('/alumno/show',[App\Http\Controllers\AlumnoController::class,'show']);
// Route::get('/alumno/create',[App\Http\Controllers\AlumnoController::class,'create']);
// Route::post('/alumno/create',[App\Http\Controllers\AlumnoController::class,'store']);
// Route::post('/alumno/actualizar',[App\Http\Controllers\AlumnoController::class,'postActualizar']);
// Route::get('/alumno/eliminar',[App\Http\Controllers\AlumnoController::class,'getEliminar']);

Route::get('/respuestas',[App\Http\Controllers\RespuestasController::class,'index']);
Route::get('/respuestas/show',[App\Http\Controllers\RespuestasController::class,'show']);
Route::get('/respuestas/create',[App\Http\Controllers\RespuestasController::class,'create']);
Route::post('/respuestas',[App\Http\Controllers\RespuestasController::class,'store']);
Route::post('/respuestas/actualizar',[App\Http\Controllers\RespuestasController::class,'postActualizar']);
Route::get('/respuestas/eliminar',[App\Http\Controllers\RespuestasController::class,'getEliminar']);

Route::get('/preguntas',[App\Http\Controllers\PreguntasController::class,'index']);
Route::get('/preguntas/show',[App\Http\Controllers\PreguntasController::class,'show']);
Route::get('/preguntas/create',[App\Http\Controllers\PreguntasController::class,'create']);
Route::post('/preguntas',[App\Http\Controllers\PreguntasController::class,'store']);
Route::post('/preguntas/actualizar',[App\Http\Controllers\PreguntasController::class,'postActualizar']);
Route::get('/preguntas/eliminar',[App\Http\Controllers\PreguntasController::class,'getEliminar']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
