<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipanteController;
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
    return 'algo aqui';
});
Route::get('/participantes', [ParticipanteController::class,'show'])->name('participante.lista');

Route::get('/participantes/formulario', [ParticipanteController::class,'index'])->name('participante.formulario');
Route::post('/participantes/insere', [ParticipanteController::class,'create'])->name('participante.insere');