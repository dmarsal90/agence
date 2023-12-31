<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultorController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/consultor', [ConsultorController::class, 'index'])->name('consultor');
Route::post('/consultor/desempenho',  [ConsultorController::class, 'desempenho'])->name('consultor.desempenho');
Route::post('/relatorio', [ConsultorController::class, 'consultoresRelatorio'])->name('relatorio');
Route::post('/grafico', [ConsultorController::class, 'graficoConsultores'])->name('grafico');
Route::post('/pizza', [ConsultorController::class, 'pizzaConsultores'])->name('pizza');
